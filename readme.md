"Tutorial Laravel"
1. Query Manual 
   insert USE DB;
    public function index() {
        // return Datatables::of(Karyawan::all())->make(true);
        $results = DB::select( DB::raw("SELECT * FROM nama tabel WHERE "));
        return $results;
    }
 2. DataTables
    https://www.tutsmake.com/laravel-6-install-yajra-datatables-example-tutorial/
 
