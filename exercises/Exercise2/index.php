// Lots of pseudo code in here for the requirements

<?php
  class ComicBook {
    private $id;
    private $name;
    private $description;
    private $active;
    private $created;
    private $updated;
    private $allData = array();

    public function __construct($id, $name, $description, $active, $created, $updated) {
      $this->id      = $id;
      $this->name    = $name;
      $this->desc    = $description;
      $this->active  = $active;
      $this->created = $created;
      $this->updated = $updated;
    }

    public function createData($data) {
      $allData['create'] = $data;
      return $allData;
    }

    public function fetchDataById($id) {
      $ids = array_columns($allData, 'info', 'id');
      return $ids;
    }

    public function searchData($criteria) {
      if (in_array($criteria, $allData)) {
        return $allData;
      }
    }
  }

  class ComicFactory {
    public static function incept($id, $name, $description, $active, $created, $updated) {
      return new ComicBook($id, $name, $description, $active, $created, $updated);
    }
  }

  // have the factory create the Comic Book object
  // these would be more dynamic in nature, coming from an API endpoint or something like that
  $issue = ComicFactory::incept('1', 'X-Men', 'A good book', 'yes', '1963', '2017');

  print_r($issue->createData($dataToCreate));
  print_r($issue->fetchDataById($id));
  print_r($issue->searchData({$searchTerm}));
