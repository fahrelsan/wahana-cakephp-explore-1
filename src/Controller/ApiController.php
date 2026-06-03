<?php
namespace App\Controller;

use Cake\View\JsonView;
use App\Controller\AppController;

class ApiController extends AppController
{
    public function viewClasses(): array
    {
        return [JsonView::class];
    }

    public function index()
    {
        $users = $this->set('users', $this->User->find('all'));
        $this->set([
            'users' => $users,
            '_serialize' => ['users']
        ]);
    }

    public function view($id = null)
    {
        dd("test");
        $user = $this->Users->get($id);
        $this->set([
            'user' => $user,
            '_serialize' => ['user']
        ]);
    }

    public function users(?string $id = null)
    {
        $usersTable = $this->fetchTable('Users');
        $this->Authorization->skipAuthorization();
        $user = $usersTable->get($id);

        $this->set(compact('user'));

        $this->viewBuilder()->setOption('serialize', ['user']);
    }

    public function tasks(?string $id = null) {
        $tasksTable = $this->fetchTable('Tasks');
        $this->Authorization->skipAuthorization();
        $task = $tasksTable->get($id);

        $this->set([
            'task' => $task,
            '_serialize' => ['task']
        ]);

    }
}
