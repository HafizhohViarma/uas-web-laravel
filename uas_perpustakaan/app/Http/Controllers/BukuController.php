<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\BukuModel;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class BukuController extends Controller
{
    //method untuk menampilkan data buku di halaman home
    public function viewHome()
    {

        $query = BukuModel::latest();
        if (request('search')) {
            $query->where('judul', 'like', '%' . request('search') . '%');
        }
        // $dataBuku = BukuModel::take(4)->get(); // Ambil 4 data buku untuk ditampilkan di halaman home
        $bukuData = $query->get(); //Mengambil hasil query
        return view('view_home', compact('bukuData'));
    }

    //method untuk lihat selengkapnya
    public function lihatBuku($id)
    {
        $buku = BukuModel::find($id);
        return view('lihat_buku', compact('buku'));
    }

    //method untuk tampil data buku di menu Data Buku
    public function bukutampil()
    {
        $databuku = BukuModel::orderby('kode_buku', 'ASC')
        ->paginate(5);
        $categories = Category::all();
        return view('halaman/view_buku',['buku'=>$databuku, 'categories'=>$categories]);
    }

    // method untuk menampilkan form tambah buku
    // public function tambahBukuForm()
    // {
    //     $categories = Category::all(); // Ambil semua data kategori
    //     $bukuData = BukuModel::all(); // Ambil semua data buku
    //     return view('halaman/view_buku', compact('categories', 'bukuData'));
    // }


    //method untuk tambah data buku
    public function bukutambah(Request $request)
    {
        $this->validate($request, [
            'kode_buku' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
            'pengarang' => 'required',
            'category_id' => 'required',
            'sampul' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        //Upload new image
        $image = $request->file('sampul');
        $imageName = time() . '.' . $image->getClientOriginalExtension();

        //menyimpan gambar ke folder public/images
        $image->move(public_path('images'), $imageName);

        BukuModel::create([
            'kode_buku' => $request->kode_buku,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'pengarang' => $request->pengarang,
            'category_id' => $request->category_id,
            'sampul' => $imageName,
        ]);


        return redirect('/buku')->with('success', 'data berhasil disimpan');
    }

     //method untuk hapus data buku
     public function bukuhapus($id_buku)
     {
         $databuku=BukuModel::find($id_buku);
         $databuku->delete();

         return redirect()->back();
     }

     //method untuk edit data buku
    public function bukuedit($id_buku, Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'deskripsi' => 'required',
            'pengarang' => 'required',
            'category_id' => 'required',
            'sampul' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $buku = BukuModel::find($id_buku);
        $buku->kode_buku = $request->kode_buku;
        $buku->judul = $request->judul;
        $buku->deskripsi = $request->deskripsi;
        $buku->pengarang = $request->pengarang;
        $buku->category_id = $request->category_id;

        if ($request->hasFile('sampul')) {
            // Upload new image
            $image = $request->file('sampul');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Move the image to the "public/images" folder
            $image->move(public_path('images'), $imageName);

            // Delete the old image if exists
            if ($buku->sampul) {
                unlink(public_path('images/' . $buku->sampul));
            }

            // Update the database with the new image name
            $buku->sampul = $imageName;
        }

        $buku->save();
        return redirect()->back();
    }
}
