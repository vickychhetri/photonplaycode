<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Spatie\DbDumper\Compressors\GzipCompressor;
use Spatie\DbDumper\Databases\MySql;

class DBBackupController extends Controller
{
    public function db_backup_page(){
        return view('dbbackup');

    }

    public function download()
    {

        $dumpCommand = MySql::create()
            ->setDbName(config('database.connections.mysql.database'))
            ->setUserName(config('database.connections.mysql.username'))
            ->setPassword(config('database.connections.mysql.password'))
            ->useCompressor(new GzipCompressor()); // or `new Bzip2Compressor()`

        $filename='db'.date('m-d-Y_hia').".sql.gz";
        $path = Storage::disk('dbbackup')->path($filename);
        $dumpCommand->dumpToFile($path);
        return response()->file($path);

    }
}
