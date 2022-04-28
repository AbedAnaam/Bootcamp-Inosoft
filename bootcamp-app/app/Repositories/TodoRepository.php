<?php
    namespace App\Repositories;

    use App\Models\Todo;

    class TodoRepository
    {
        protected $todo;

        public function __construct(Todo $todo)
        {
            $this->todo = $todo;
        }

        public function getAll() : Object
        {
            $todo = $this->todo->get();
            return $todo;
        }

        public function store($data) : Object
        {
            $newData = new $this->todo;
            $newData->title = $data['title'];
            $newData->save();
            return $newData->fresh();
        }
    }
?>
