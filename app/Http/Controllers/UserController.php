<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Models\User;
    class UserController extends Controller
    {


        public function __construct( )
        {
            $this->middleware(['role:super_admin']);
        }


        public function index()
        {
        $users=User::all();

        return view('admin.users.index',["users"=>$users]);
        }


        public function create()
        {
            //
        }


        public function store(Request $request)
        {
            //
        }

        public function show($id)
        {
            //
        }


        public function edit($id)
        {

            $user=User::find($id);
            return view('admin.users.edit',["user"=>  $user]);

        }

        public function update(Request $request, $id)
        {
            // dd($request);
            $user=User::find($id);
        $request-> validate([
        "name"=>"required",
            "roles"=>"required|array|min:1",
            ]);

    $user->name = $request->input('name');

            $user->save();


    $user->syncRoles($request->roles);
    return redirect()->route('users.index');

        }


        public function destroy($id)
        {
            //
        }
    }
