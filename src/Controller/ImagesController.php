<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Images Controller
 *
 * @property \App\Model\Table\ImagesTable $Images
 *
 * @method \App\Model\Entity\Image[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ImagesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $images = $this->paginate($this->Images);

        $this->set(compact('images'));
        $image = $this->Images->newEntity();
        if($this->request->is('post')){
            if(!empty($this->request->data['path']['name'])){
                $fileName = $this->request->data['path']['name'];
                $uploadPath = 'uploads/';
                $uploadFile = $uploadPath.$fileName;
                if(move_uploaded_file($this->request->data['path']['tmp_name'], $uploadFile)) {
                    $image->ordre = 1;
                    $image->path = $uploadFile;
                    if ($this->Images->save($image)) {
                        $this->Flash->success(__('Image has been uploaded and inserted successfully.'));
                        return $this->redirect(['action' => 'index']);
                    }else{
                        $this->Flash->error(__('Unable to upload image, please try again.'));
                    }
                }else{
                    $this->Flash->error(__('Unable to upload image, please try again.'));
                }
            }else{
                $this->Flash->error(__('Please choose a file to upload.'));
            }
        }
        $this->set(compact('image'));
    }

    /**
     * View method
     *
     * @param string|null $id Image id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $image = $this->Images->get($id, [
            'contain' => []
        ]);

        $this->set('image', $image);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $image = $this->Images->newEntity();
        if($this->request->is('post')){
            if(!empty($this->request->data['path']['name'])){
                $fileName = $this->request->data['path']['name'];
                $uploadPath = 'uploads/';
                $uploadFile = $uploadPath.$fileName;
                if(move_uploaded_file($this->request->data['path']['tmp_name'], $uploadFile)) {
                    $image->ordre = 1;
                    $image->path = $uploadFile;
                    if ($this->Images->save($image)) {
                        $this->Flash->success(__('Image has been uploaded and inserted successfully.'));
                        return $this->redirect(['action' => 'index']);
                    }else{
                        $this->Flash->error(__('Unable to upload image, please try again.'));
                    }
                }else{
                    $this->Flash->error(__('Unable to upload image, please try again.'));
                }
            }else{
                $this->Flash->error(__('Please choose a file to upload.'));
            }
        }
        $this->set(compact('image'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Image id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $image = $this->Images->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $image = $this->Images->patchEntity($image, $this->request->getData());
            if ($this->Images->save($image)) {
                $this->Flash->success(__('The image has been saved.'));

                return $this->redirect($this->Referer());
            }
            $this->Flash->error(__('The image could not be saved. Please, try again.'));
        }
        $this->set(compact('image'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Image id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $image = $this->Images->get($id);
        if ($this->Images->delete($image)) {
            $this->Flash->success(__('The image has been deleted.'));
        } else {
            $this->Flash->error(__('The image could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function order()
    {
        $images = $this->paginate($this->Images);

        $this->set(compact('images'));
        
        
    }

    public function upload()
    {
        
    }

    public function order1()
    {
        $images = $this->paginate($this->Images);

        $this->set(compact('images'));
    }


}
