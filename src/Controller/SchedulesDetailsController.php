<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * SchedulesDetails Controller
 *
 * @property \App\Model\Table\SchedulesDetailsTable $SchedulesDetails
 * @method \App\Model\Entity\SchedulesDetail[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SchedulesDetailsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Schedules', 'Subjects', 'SubjectsDetails', 'Activities'],
        ];
        $schedulesDetails = $this->paginate($this->SchedulesDetails);

        $this->set(compact('schedulesDetails'));
    }

    /**
     * View method
     *
     * @param string|null $id Schedules Detail id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $schedulesDetail = $this->SchedulesDetails->get($id, [
            'contain' => ['Schedules', 'Subjects', 'SubjectDetails', 'Activities'],
        ]);

        $this->set('schedulesDetail', $schedulesDetail);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $schedulesDetail = $this->SchedulesDetails->newEmptyEntity();
        if ($this->request->is('post')) {
            $schedulesDetail = $this->SchedulesDetails->patchEntity($schedulesDetail, $this->request->getData());
            if ($this->SchedulesDetails->save($schedulesDetail)) {
                $this->Flash->success(__('The schedules detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The schedules detail could not be saved. Please, try again.'));
        }
        $schedules = $this->SchedulesDetails->Schedules->find('list', ['limit' => 200]);
        $subjects = $this->SchedulesDetails->Subjects->find('list', ['limit' => 200]);
        $subjectsDetails = $this->SchedulesDetails->SubjectsDetails->find('list', ['limit' => 200]);
        $activities = $this->SchedulesDetails->Activities->find('list', ['limit' => 200]);
        $this->set(compact('schedulesDetail', 'schedules', 'subjects', 'subjectsDetails', 'activities'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Schedules Detail id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $schedulesDetail = $this->SchedulesDetails->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $schedulesDetail = $this->SchedulesDetails->patchEntity($schedulesDetail, $this->request->getData());
            if ($this->SchedulesDetails->save($schedulesDetail)) {
                $this->Flash->success(__('The schedules detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The schedules detail could not be saved. Please, try again.'));
        }
        $schedules = $this->SchedulesDetails->Schedules->find('list', ['limit' => 200]);
        $subjects = $this->SchedulesDetails->Subjects->find('list', ['limit' => 200]);
        $subjectDetails = $this->SchedulesDetails->SubjectDetails->find('list', ['limit' => 200]);
        $activities = $this->SchedulesDetails->Activities->find('list', ['limit' => 200]);
        $this->set(compact('schedulesDetail', 'schedules', 'subjects', 'subjectDetails', 'activities'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Schedules Detail id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $schedulesDetail = $this->SchedulesDetails->get($id);
        if ($this->SchedulesDetails->delete($schedulesDetail)) {
            $this->Flash->success(__('The schedules detail has been deleted.'));
        } else {
            $this->Flash->error(__('The schedules detail could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
