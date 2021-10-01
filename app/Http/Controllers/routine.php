<?php

namespace App\Http\Controllers;
use Symfony\Component\Process\Process;

use Illuminate\Http\Request;

use Symfony\Component\Process\Exception\ProcessFailedException;

// use robertogallea\LaravelPython\Services\LaravelPython;
use robertogallea\LaravelPython\Services\LaravelPython;





class routine extends Controller
{
    public function testPythonScript1()
    {
    $process = new Process(['test.py']);
    $process->run();
    
    if (!$process->isSuccessful()) {
        throw new ProcessFailedException($process);
    }
    echo $process->getOutput();

    // $data = $process->getOutput();

    // dd($data);

    // return view("/home");
}
    public function testPythonScript()
    {
        $service = new LaravelPython();
        $result = $service->run('test.py');
        // $parameters = array('par1', 'par2');
        // $result = $service->run('/path/to/script.py', $parameters);

    
}
}
