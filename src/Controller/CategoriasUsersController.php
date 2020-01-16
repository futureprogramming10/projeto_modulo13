<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CategoriasUsers Controller
 *
 * @property \App\Model\Table\CategoriasUsersTable $CategoriasUsers
 *
 * @method \App\Model\Entity\CategoriasUser[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CategoriasUsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Categorias', 'Users'],
        ];
        $categoriasUsers = $this->paginate($this->Categoriasusers);

        $this->set(compact('categoriasUsers'));
    }

    /**
     * View method
     *
     * @param string|null $id Categorias User id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $categoriasUser = $this->Categoriasusers->get($id, [
            'contain' => ['Categorias', 'Users'],
        ]);

        $this->set('categoriasUser', $categoriasUser);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $categoriasUser = $this->Categoriasusers->newEmptyEntity();
        if ($this->request->is('post')) {
            $categoriasUser = $this->CategoriasUsers->patchEntity($categoriasUser, $this->request->getData());
            if ($this->CategoriasUsers->save($categoriasUser)) {
                $this->Flash->success(__('The categorias user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The categorias user could not be saved. Please, try again.'));
        }
        $categorias = $this->Categoriasusers->Categorias->find('list', ['limit' => 200]);
        $users = $this->Categoriasusers->Users->find('list', ['limit' => 200]);
        $this->set(compact('categoriasUser', 'categorias', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Categorias User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $categoriasUser = $this->Categoriasusers->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $categoriasUser = $this->CategoriasUsers->patchEntity($categoriasUser, $this->request->getData());
            if ($this->CategoriasUsers->save($categoriasUser)) {
                $this->Flash->success(__('The categorias user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The categorias user could not be saved. Please, try again.'));
        }
        $categorias = $this->Categoriasusers->Categorias->find('list', ['limit' => 200]);
        $users = $this->Categoriasusers->Users->find('list', ['limit' => 200]);
        $this->set(compact('categoriasUser', 'categorias', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Categorias User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $categoriasUser = $this->Categoriasusers->get($id);
        if ($this->Categoriasusers->delete($categoriasUser)) {
            $this->Flash->success(__('The categorias user has been deleted.'));
        } else {
            $this->Flash->error(__('The categorias user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
