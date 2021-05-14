<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use CodeIgniter\View\Table;
class Blog extends Controller
{
	public function index()
	{
		//return ("Welcome Blogs");
        echo view("myview");
	}

    /*multiple views */
    public function multiview()
	{
        echo view("header");
        echo view("myview");
        echo view("footer");
	}
    public function datapass()
	{
        
        $data = ["mytitle"=>"WELCOME", "content"=>"View page",
    "subjects"=>["html", "css",  "wordpress", "php",  "codeigniter"]
];  
             echo view("datapass",$data );
	}
    public function htmltable()
	{
        $table  = new Table();
        $data = [
            ["name", "age", "position"],
            ["anju", "25", "develp"],
            ["appu", "27", "design"],
];  


$template = [
    'table_open'         => '<table border="1" cellpadding="10" cellspacing="10" class="test">',

    'thead_open'         => '<thead>',
    'thead_close'        => '</thead>',

    'heading_row_start'  => '<tr>',
    'heading_row_end'    => '</tr>',
    'heading_cell_start' => '<th>',
    'heading_cell_end'   => '</th>',

    'tfoot_open'         => '<tfoot>',
    'tfoot_close'        => '</tfoot>',

    'footing_row_start'  => '<tr>',
    'footing_row_end'    => '</tr>',
    'footing_cell_start' => '<td>',
    'footing_cell_end'   => '</td>',

    'tbody_open'         => '<tbody>',
    'tbody_close'        => '</tbody>',

    'row_start'          => '<tr>',
    'row_end'            => '</tr>',
    'cell_start'         => '<td>',
    'cell_end'           => '</td>',

    'row_alt_start'      => '<tr>',
    'row_alt_end'        => '</tr>',
    'cell_alt_start'     => '<td>',
    'cell_alt_end'       => '</td>',

    'table_close'        => '</table>'
];

$table->setTemplate($template);

// $table->setTemplate($template);
            //  echo $table->generate($data);
            $records['users'] = $table->generate($data);
            echo view("dataview",$records );
	}
public $parser;
public function __construct () {
    $this->parser = \Config\Services::parser();

}
    public function parserview()
	{
        // $parser = \Config\Services::parser();
        $data = ["mytitle"=>"Parser view",
         "content"=>"View",
        'sub_lists' => [
            ['subject'  =>'html', 'abbr' =>'hyper text'],
            ['subject'  =>'html1', 'abbr' =>'hyper text1'],
            ['subject'  =>'html1', 'abbr' =>'hyper text2'],
        ]];
        
        // echo view("parserview", $data);
        /*  $parser->setData($data);
         return $parser->render('parserview');  reduce code |   */
        return $this->parser->setData($data)->render('parserview');
	}
    public function viewfilter()
	{
        $parser = \Config\Services::parser();
        $data = ["mytitle"=>"view filter",
         "content"=>"View",];
        
        // echo view("parserview", $data);
         return $this->parser->setData($data)->render('filterview');
	}


}