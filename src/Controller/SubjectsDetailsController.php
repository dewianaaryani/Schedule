<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * SubjectsDetails Controller
 *
 * @property \App\Model\Table\SubjectsDetailsTable $SubjectsDetails
 * @method \App\Model\Entity\SubjectsDetail[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SubjectsDetailsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Subjects'],
        ];
        $subjectsDetails = $this->paginate($this->SubjectsDetails);

        $this->set(compact('subjectsDetails'));
    }

    /**
     * View method
     *
     * @param string|null $id Subjects Detail id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $subjectsDetail = $this->SubjectsDetails->get($id, [
            'contain' => ['Subjects'],
        ]);

        $this->set('subjectsDetail', $subjectsDetail);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $subjectsDetail = $this->SubjectsDetails->newEmptyEntity();
        if ($this->request->is('post')) {
            $subjectsDetail = $this->SubjectsDetails->patchEntity($subjectsDetail, $this->request->getData());
            if ($this->SubjectsDetails->save($subjectsDetail)) {
                $this->Flash->success(__('The subjects detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The subjects detail could not be saved. Please, try again.'));
        }
        $subjects = $this->SubjectsDetails->Subjects->find('list', ['limit' => 200]);
        $this->set(compact('subjectsDetail', 'subjects'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Subjects Detail id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $subjectsDetail = $this->SubjectsDetails->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $subjectsDetail = $this->SubjectsDetails->patchEntity($subjectsDetail, $this->request->getData());
            if ($this->SubjectsDetails->save($subjectsDetail)) {
                $this->Flash->success(__('The subjects detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The subjects detail could not be saved. Please, try again.'));
        }
        $subjects = $this->SubjectsDetails->Subjects->find('list', ['limit' => 200]);
        $this->set(compact('subjectsDetail', 'subjects'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Subjects Detail id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $subjectsDetail = $this->SubjectsDetails->get($id);
        if ($this->SubjectsDetails->delete($subjectsDetail)) {
            $this->Flash->success(__('The subjects detail has been deleted.'));
        } else {
            $this->Flash->error(__('The subjects detail could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
