<?php

use Illuminate\Database\Seeder;
use App\Pegawai;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pegawai::create([
            'id' => '196004041987011001',
            'prodi_id' => 2,
            'nama' => 'Prof. Dr. Ekohariadi, M.Pd',
            'jenis_kelamin' => 'Pria',
            'jabatan' => Pegawai::JABATAN[0],
        ]);
        Pegawai::create([
            'id' => '196505191992021001',
            'prodi_id' => 1,
            'nama' => 'Drs. BAMBANG SUJATMIKO, M.T.',
            'jenis_kelamin' => 'Pria',
            'jabatan' => Pegawai::JABATAN[8],
        ]);
        Pegawai::create([
            'id' => '196812171994032002',
            'prodi_id' => 1,
            'nama' => 'Rina Harimurti, S.Pd.,MT',
            'jenis_kelamin' => 'Wanita',
            'jabatan' => Pegawai::JABATAN[1],
        ]);
        Pegawai::create([
            'id' => '196105151986012001',
            'prodi_id' => 2,
            'nama' => 'Dr. MEINI SONDANG SUMBAWATI, M.Pd.',
            'jenis_kelamin' => 'Wanita',
            'jabatan' => Pegawai::JABATAN[8],
        ]);
        Pegawai::create([
            'id' => '196901251995122001',
            'prodi_id' => 1,
            'nama' => 'Anita Qoiriah, S.Kom., M.Kom',
            'jenis_kelamin' => 'Wanita',
            'jabatan' => Pegawai::JABATAN[2],
        ]);
        Pegawai::create([
            'id' => '197411012003121001',
            'prodi_id' => 4,
            'nama' => 'Aditya Prapanca, ST. M.Kom',
            'jenis_kelamin' => 'Pria',
            'jabatan' => Pegawai::JABATAN[7],
        ]);
        Pegawai::create([
            'id' => '197702032005012001',
            'prodi_id' => 1,
            'nama' => 'Wiyli Yustanti, S.Si. M.Kom',
            'jenis_kelamin' => 'Wanita',
            'jabatan' => Pegawai::JABATAN[8],
        ]);
        Pegawai::create([
            'id' => '197512032005012001',
            'prodi_id' => 1,
            'nama' => 'NAIM ROCHMAWATI ,S.Kom. MT.',
            'jenis_kelamin' => 'Wanita',
            'jabatan' => Pegawai::JABATAN[9],
        ]);
        Pegawai::create([
            'id' => '197908062006041001',
            'prodi_id' => 4,
            'nama' => 'Agus Prihanto, ST. M.Kom',
            'jenis_kelamin' => 'Pria',
            'jabatan' => Pegawai::JABATAN[8],
        ]);
        Pegawai::create([
            'id' => '197506022003122001',
            'prodi_id' => 4,
            'nama' => 'Yuni Yamasari, S.Kom., M.Kom',
            'jenis_kelamin' => 'Wanita',
            'jabatan' => Pegawai::JABATAN[8],
        ]);
        Pegawai::create([
        'id' => '198004122006042002',
        'prodi_id' => 3,
        'nama' => 'ARIES DWI INDRIYANTI, S.Kom.,M.Kom.',
        'jenis_kelamin' => 'Wanita',
        'jabatan' => Pegawai::JABATAN[8],
         ]);
        Pegawai::create([
            'id' => '197303302006041001',
            'prodi_id' => 3,
            'nama' => 'Ari Kurniawan, S.Kom.,MT',
            'jenis_kelamin' => 'Pria',
            'jabatan' => Pegawai::JABATAN[10],
        ]);
        Pegawai::create([
            'id' => '197912062008011011',
            'prodi_id' => 3,
            'nama' => 'Dedy Rahman Prehanto. S.Kom M.Kom',
            'jenis_kelamin' => 'Pria',
            'jabatan' => Pegawai::JABATAN[10],
        ]);
        Pegawai::create([
            'id' => '197810272008121002',
            'prodi_id' => 1,
            'nama' => 'ANDI IWAN NURHIDAYAT, S.Kom.,M.T.',
            'jenis_kelamin' => 'Pria',
            'jabatan' => Pegawai::JABATAN[8],
        ]);
        Pegawai::create([
            'id' => '198211022008121001',
            'prodi_id' => 4,
            'nama' => 'SALAMUN ROHMAN NUDIN, S.Kom.,M.Kom.',
            'jenis_kelamin' => 'Pria',
            'jabatan' => Pegawai::JABATAN[8],
        ]);
        Pegawai::create([
            'id' => '197701102008121003',
            'prodi_id' => 1,
            'nama' => 'ASMUNIN , S.Kom.',
            'jenis_kelamin' => 'Pria',
            'jabatan' => Pegawai::JABATAN[4],
        ]);
        Pegawai::create([
            'id' => '198003252008121001',
            'prodi_id' => 4,
            'nama' => 'I GUSTI LANANG P.E.P., S.Kom., M.Kom.',
            'jenis_kelamin' => 'Pria',
            'jabatan' => Pegawai::JABATAN[13],
        ]);
        Pegawai::create([
            'id' => '197912202008121001',
            'prodi_id' => 3,
            'nama' => 'DWI FATRIANTO SUYATNO ,S.Kom.,M.Kom.',
            'jenis_kelamin' => 'Pria',
            'jabatan' => Pegawai::JABATAN[6],
        ]);
        Pegawai::create([
            'id' => '198102212008122001',
            'prodi_id' => 3,
            'nama' => 'ARDHINI WARIH UTAMI, S.Kom., M.Kom',
            'jenis_kelamin' => 'Wanita',
            'jabatan' => Pegawai::JABATAN[8],
        ]);
        Pegawai::create([
            'id' => '197905082009121001',
            'prodi_id' => 2,
            'nama' => 'Setya Chendra Wibawa, S.Pd, MT',
            'jenis_kelamin' => 'Pria',
            'jabatan' => Pegawai::JABATAN[5],
        ]);
        Pegawai::create([
            'id' => '1112',
            'prodi_id' => 2,
            'nama' => 'Yeni Anistyasari, S.Pd. M.Kom',
            'jenis_kelamin' => 'Wanita',
            'jabatan' => Pegawai::JABATAN[8],
        ]);
        Pegawai::create([
        'id' => '198104142009121004',
        'prodi_id' => 3,
        'nama' => 'I KADEK DWI NURYANA ,S.T., M.Kom.',
        'jenis_kelamin' => 'Pria',
        'jabatan' => Pegawai::JABATAN[8],
        ]);
        Pegawai::create([
            'id' => '0716018704',
            'prodi_id' => 4,
            'nama' => 'Ricky Eka Putra, S.Kom. M.Kom',
            'jenis_kelamin' => 'Pria',
            'jabatan' => Pegawai::JABATAN[8],
        ]);
        Pegawai::create([
            'id' => '1111',
            'prodi_id' => 1,
            'nama' => 'Ibnu Febry Kurniawan, S.Kom, M.Sc',
            'jenis_kelamin' => 'Pria',
            'jabatan' => Pegawai::JABATAN[11],
        ]);
        Pegawai::create([
            'id' => '1113',
            'nama' => 'Wuri Handayani, S.H.',
            'jenis_kelamin' => 'Wanita',
            'jabatan' => Pegawai::JABATAN[14],
        ]);
        Pegawai::create([
            'id' => '1114',
            'nama' => 'Ratna Prahastuti',
            'jenis_kelamin' => 'Wanita',
            'jabatan' => Pegawai::JABATAN[14],
        ]);
        Pegawai::create([
            'id' => '1115',
            'nama' => 'Benny Yulianto',
            'jenis_kelamin' => 'Pria',
            'jabatan' => Pegawai::JABATAN[14],
        ]);
        Pegawai::create([
            'id' => '1116',
            'nama' => 'Dodik Arwin D., SST,MT',
            'jenis_kelamin' => 'Pria',
            'jabatan' => Pegawai::JABATAN[14],
        ]);
        Pegawai::create([
            'id' => '1117',
            'nama' => 'Sholikhun, ST.',
            'jenis_kelamin' => 'Pria',
            'jabatan' => Pegawai::JABATAN[14],
        ]);
        Pegawai::create([
            'id' => '1118',
            'nama' => 'Sugianto, AMd.',
            'jenis_kelamin' => 'Pria',
            'jabatan' => Pegawai::JABATAN[14],
        ]);
    }
}
