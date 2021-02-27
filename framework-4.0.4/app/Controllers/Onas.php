<?php namespace App\Controllers;

use App\Models\UsersModel;


class Onas extends BaseController
{
	public function index()
	{
		$model = new UsersModel();
		$data = [
			'users' => $model->getUsers(),
			'title' => 'O nas',
		];
		//echo view('templates/header', $data);
		echo view('onas/onas_lista', $data);
	}
	public function view($login = NULL)
    {
        $model = new UsersModel();
    
        $data['users'] = $model->getUsers($login);
    
        if (empty($data['users']))
        {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the news item: '. $login);
		}    
        echo view('templates/header', ['title' => 'Szczegóły użytkownika']);
		echo view('onas/onas_view', $data);
		}
    public function create()
{
    $model = new UsersModel();

    if ($this->request->getMethod() === 'post' && $this->validate([
			'imie' => 'required|min_length[3]|max_length[255]',
			'nazwisko' => 'required|min_length[3]|max_length[255]',
			'email' => 'required'
        ]))
    {
        $model->save([
			'login' => $this->request->getPost('login'),
            'imie' => $this->request->getPost('imie'),
            'nazwisko' => $this->request->getPost('nazwisko'),
            'email' => $this->request->getPost('email'),
        ]);
        echo view('templates/header', ['title' => 'Dodano użytkownika']);
        echo view('onas/success',);
    }
    else
    {
        echo view('templates/header', ['title' => 'Dodaj użytkownika']);
        echo view('onas/create');    }
}
public function update($login = false)
    {
        $model = new UsersModel();
        if ($this->request->getMethod() === 'post' && $this->validate([
			'imie' => 'required|min_length[3]|max_length[255]',
			'nazwisko' => 'required|min_length[3]|max_length[255]',
			'email' => 'required'
        ]))       
        {
            $id = $this->request->getPost('id');
            $data= [
				//'login' => $this->request->getPost('login'),
                'imie' => $this->request->getPost('imie'),
                'login'  => url_title($this->request->getPost('login'), '-', TRUE),
				'nazwisko' => $this->request->getPost('nazwisko'),
				'email' => $this->request->getPost('email'),
            ];
            $model->update($id, $data);
            echo view('templates/header', ['title' => 'Zaktualizowano użytkownika']);
            echo view('onas/onas_updateok', ['login' => $data['login']]);

        } 
        else {
            $data['users'] = $model->getUsers($login);
            if (empty($data['users']))
                {
                    throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the news item: '. $users);
                }    
                //echo view('templates/header', $data);
                echo view('templates/header', ['title' => 'Zaktualizuj użytkownika']);
                echo view('onas/onas_update', $data);
                //echo view('templates/footer', $data);

        }

    }
    public function delete($login = null)
    {
        $model = new UsersModel();
        if ($this->request->getMethod()==='post')
        {
            $data=[
                'id' =>  $this->request->getPost('id'),

            ];

           // $data['news'] = $model->get($id);
            $model->delete(['id'=>$data['id']]);
            echo view('templates/header', ['title' => 'Usunięto użytkownika']);
            echo view('onas/onas_delsuccess', ['id' => $data['id']]);
        }   
        else {
            $data['users'] = $model->getUsers($login);
            if (empty($data['users']))
                {
                    throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the news item: '. $slug);
                }    
                echo view('templates/header', ['title' => 'Usuń użytkownika']);
                echo view('onas/onas_delform', $data);
                //echo view('templates/footer', $data);

        }


	

	//--------------------------------------------------------------------

}
}
