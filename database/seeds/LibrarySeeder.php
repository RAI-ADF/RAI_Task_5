use App\genre;
use App\buku;
use App\pengarang;
use App\alamat;
class LibrarySeeder extends Seeder{
	
	public function run(){

		DB::table('bukus')->delete();
		DB::table('alamats')->delete();
		DB::table('pengerangs')->delete();
		DB::table('genres')->delete();
	}

}