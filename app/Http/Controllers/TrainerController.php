<?php

namespace edy\Http\Controllers;
use edy\Trainer;
use Illuminate\Http\Request;
use edy\Http\Requests\StoreTrainerRequest;
class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainers = Trainer::all();
       return view('trainers.index',compact('trainers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trainers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTrainerRequest $request)
    {/* en este caso las reglas de validacion se realizaran en StoreTrainerRequest
     pero es posible usarlas desde este controlador con las siguientes lineas comentadas*/
        // $validateData=$request->validate([
        //     'name'=>'required|max:10',
        //     'avatar'=>'required|image',
        //     'slug'=>'required'
        // ]);
        //validadcion para agregar la imagen del entrenador
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/',$name);
            
        }
        $trainer = new Trainer();
        $trainer->name = $request->input('name');
        $trainer->slug = $request->input('slug');
        $trainer->avatar = $name;
        $trainer->save(); 
        return redirect()->route('trainers.index')
        ->with('status','Se ha agregado un nuevo entrenador');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Trainer $trainer)
    {
        // $trainer =Trainer::where('slug','=',$slug)->firstOrFail();
        // $trainer =Trainer::find($id);

       return view('trainers.show',compact('trainer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Trainer $trainer)
    {
        return view('trainers.edit',compact('trainer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trainer $trainer)
    {
        $trainer->fill($request->except('avatar'));
        $nombre=$trainer->name;
         if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $name = time().$file->getClientOriginalName();
            $trainer->avatar=$name;
            $file->move(public_path().'/images/',$name);
            
        }

        $trainer->save();
        return redirect()->route('trainers.show',[$trainer])
        ->with('info','Se han actualizado los datos del entrenador'.' '.$nombre);
        // return 'los datos se actualizaron correctamente';
         //return redirect()->route('trainers.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trainer $trainer)
    /*se localiza el archivo que se va a borrar*/
    {   $file_path = public_path().'/images/'.$trainer->avatar;
    $nombre=$trainer->name;
   
    /* luego se accede al metodo delete del alias \File y se le
    pasa como argumento la variable file_path que contiene la ruta y nombre del
    archivo a eliminar*/
        \File::delete($file_path);

        $trainer->delete();
        return redirect()->route('trainers.index')
        ->with('status','Se ha eliminado el entrenador  '.' '.$nombre);
    }
}
