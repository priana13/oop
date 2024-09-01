<?php 


interface Page {

    public function withHeader(): Page;

    public function withNavbar(): Page;

    public function withBody(): Page;

    public function withFooter(): Page;

}


class Login implements Page 
{
    public function withHeader(): Page
    {
        echo "Section Header </br>";

        return $this;
    }

    public function withNavbar(): Page
    {
        echo "Section Navbar </br>";

        return $this;
        
    }        
   

    public function withBody() : Page
    {
        echo "Section Body </br>";
        return $this;
    }

    public function withFooter(): Page
    {
        echo "Section Footer </br>";
        return $this;
    }
}

function tampilkanHalaman(Page $page){

    $page->withHeader()
         ->withNavbar()
         ->withBody()
         ->withFooter();

}


tampilkanHalaman( new Login() );
