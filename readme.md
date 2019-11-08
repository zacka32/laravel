"Tutorial Laravel"
1. Query Manual 
   insert USE DB;
    public function index() {
        // return Datatables::of(Karyawan::all())->make(true);
        $results = DB::select( DB::raw("SELECT * FROM nama tabel WHERE "));
        return $results;
    }
