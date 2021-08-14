<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller{
public function index(Request $request)
    {
        $data = ['msg'=>'これはコントローラから渡されたメッセージです。',
                'id'=>$request->id,
                'pw'=>$request->pw
                ];
        return view('hello.index',$data);
    }
}
/*
global $head, $style, $body, $end;
$head = "<html><head>";
$style = <<<EOF
    <style>
    body font-size:16; color:#999;
    h1  font-size:100pt; text-align:right; color:#eee; margin:-40px 0px -50px 0px;
    </style>
EOF;
$body = "</head><body>";
$end = "</body></html>";

function tag($tag, $txt){
    return "<{$tag}>".$txt."</{$tag}>";
}
*/
/*
class HelloController extends Controller{
    public function index(){
        return <<<EOF
        <html>
        <head>
        <title>Hello</title>
        <style>
        body{font-size:30pt; text-align:right; color:#eee; margin:-15px 0px 0px 0px;}
        </style>
        </head>
        <body>
            <h1>Single Action</h1>
            <p>これは、シングルアクションコントローラのアクションです。</p>
        </body>
        </html>
        EOF;
    }
}
*/
/*
    public function index(){
        global $head, $body, $style, $end;

        $html = $head. tag('title', 'Hello/Index').$style.$body.tag('h1','Index').tag('p', 'this is Index page').'<a href="/hello/other">
                go to Other page</a>'.$end;
        return $html;
    }    
 
    public function other(){
        global $head, $body, $style, $end;

        $html = $head. tag('title', 'Hello/Other').$style.$body.tag('h1','Other').tag('p', 'this is Other page').'<a href="/hello/">
                go to the previow page</a>'.$end;
        return $html;
    }

*/

    /*
    public function index()
    {
        return <<<EOF
        <html>
        <head>
        <title>Hello/Index</title>
        <style>
        body {font-size:16px; color:#999;} 
        h1 { font-size:100pt; text-align:right; color:#eee; margin:-40px 0px -50px 0px;}
        </style>
        </head>
        <body>
            <h1>Index</h1>
            <p>これは、Helloコントローラのindexアクションです。</p>
        </body>
        </html>
        EOF;
    }
}
*/

/*
class HelloController extends Controller{
public function index()
{
    $data = [['name'=>'山田たろう','mail'=>'taro@yamada'],['name'=>'田中はなこ','mail'=>'hanako@flower'],['name'=>'鈴木さちこ','mail'=>'sachiko@happy']];
    return view('hello.index',['data'=>$data]);
}
public function post(Request $request)
{
    $data = [['name'=>'山田たろう','mail'=>'taro@yamada'],['name'=>'田中はなこ','mail'=>'hanako@flower'],['name'=>'鈴木さちこ','mail'=>'sachiko@happy']];
    return view('hello.index',['data'=>$data]);
}
}
*/


/*global $head, $style, $body, $end;
$head = '<html><head>';
$style = <<<EOF
<style>
body {font-size:16pt; color:#999;}
h1 { font-size:100pt; text-align:right; color:#eee; margin:-40px; 0px -50px 0px;}
</style>
EOF;
$body = '</head><body>';
$end = '</body></html>';

function tag($tag, $txt){
    return "<{$tag}>" . $txt . "</{$tag}>";
}
*/
/*
class HelloController extends Controller
{
    
    public function index(Request $request, Response $response){
        
        $html = <<<EOF
        <html>
        <head>
        <title>Hello/Index</title>
        <style>
        body {font-size:16pt; color:#999;}
        h1 { font-size:120pt; text-align:right; color:#fafafa; margin: -50px 0px -120px 0px;}
        </style>
        </head>
        <body>
            <h1>Hello</h1>
            <h3>Request</h3>
            <pre>{$request}</pre>
            <h3>Response</h3>
            <pre>{$response}</pre>
            </body>
        </html>
        EOF;
        
        $response->setContent($html);
        return $response;
    }

}
*/
