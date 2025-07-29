<x-fluxui-layout>
    <x-fluxui-container>
        <h1 class="text-2xl text-gray-800 border-yellow-300 font-bold mb-4 ">Data Barang Elektronik Laboratorium</h1>

        <a href="{{ route('barang.create') }}">
            <x-fluxui-button>+ Tambahkan Barang</x-fluxui-button>
        </a>

        <form method="GET" action="{{ route('barang.index') }}" class="my-4 flex gap-2">
            <x-fluxui-input name="search" placeholder="Cari nama/kode" value="{{ request('search') }}" />
            <x-fluxui-button type="submit">Search</x-fluxui-button>
        </form>

        <x-fluxui-table>
            <thead class="bg-gradient-to-b from-sky-900 to-gray-400 text-white">
                <tr>
                    <th class="px-4 py-2">Nama</th>
                    <th class="px-4 py-2">Kode</th>
                    <th class="px-4 py-2">Kategori</th>
                    <th class="px-4 py-2">Merk</th>
                    <th class="px-4 py-2">Model</th>
                    <th class="px-4 py-2">Tahun</th>
                    <th class="px-4 py-2">Jumlah</th>
                    <th class="px-4 py-2">Kondisi</th>
                    <th class="px-4 py-2">Lokasi</th>
                    <th class="px-4 py-2">Keterangan</th>
                    <th class="px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($barang as $item)
                <tr class="border-t hover:bg-gray-50">
                    <td class="px-4 py-2">{{ $item->nama_barang }}</td>
                    <td class="px-4 py-2">{{ $item->kode_barang }}</td>
                    <td class="px-4 py-2">{{ $item->kategori }}</td>
                    <td class="px-4 py-2">{{ $item->merk }}</td>
                    <td class="px-4 py-2">{{ $item->model }}</td>
                    <td class="px-4 py-2">{{ $item->tahun_pembelian }}</td>
                    <td class="px-4 py-2">{{ $item->jumlah }}</td>
                    <td class="px-4 py-2">{{ $item->kondisi }}</td>
                    <td class="px-4 py-2">{{ $item->lokasi_penyimpanan }}</td>
                    <td class="px-4 py-2">{{ $item->keterangan }}</td>
                    <td class="px-4 py-2 flex gap-2">
                        <a href="{{ route('barang.edit', $item) }}">
                            <x-fluxui-button>Edit</x-fluxui-button>
                        </a>
                        <form action="{{ route('barang.destroy', $item) }}" method="POST" onsubmit="return confirm('Yakin hapus?')">
                            @csrf
                            @method('DELETE')
                            <x-fluxui-button type="submit" class="bg-red-600 hover:bg-red-700">Hapus</x-fluxui-button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </x-fluxui-table>

        <div class="mt-4">
            {{ $barang->links() }}
        </div>
    </x-fluxui-container>
</x-fluxui-layout>
