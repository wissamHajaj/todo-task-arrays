
<?php

  $tasks = [
    ["id" => "1", "title" => "Buy groceries", "status" => "pending", "due" => "2024-04-15"],
    ["id" => "2", "title" => "Submit report", "status" => "done", "due" => "2024-04-10"],
    ["id" => "3", "title" => "Go jogging", "status" => "pending", "due" => "2024-04-12"],
    ["id" => "4", "title" => "Book flight", "status" => "done", "due" => "2024-04-8"]
  ];

  // Filter by status
  function  filterByStatus(array $tasks, string $status) {
    $filteredArray = [];
    foreach($tasks as $task) {
      if($task['status'] == $status) {
        $filteredArray[] = $task;
      }
    }
    return $filteredArray;
  }

  $result = filterByStatus($tasks, "done");
  print_r($result);

  echo "\n";

  echo "[\n";
    foreach($result as $task) {
      echo "    [\"id\" => \"{$task['id']}\", \"title\" => \"{$task['title']}\", \"status\" => \"{$task['status']}\", \"due\" => \"{$task['due']}\"],\n";
    }
  echo "]";

  echo "\n\n-----------------------------------------------------------------\n\n";


  // group by status
  function groupByStatus(array $tasks) {
    $filteredArray = [];

    foreach($tasks as $task) {
      if(isset($filteredArray[$task['status']])) {
        // Add value(task) to an existing key(status) in the filteredArray
        $filteredArray[$task['status']][] = $task;
      }
      else {
        // Add key(status) value(task) when the key(status) is not exist in the filteredArray
        $filteredArray[$task['status']] = [$task];

      }
    }
    return $filteredArray;
  }

  $result = groupByStatus($tasks);
  print_r($result);
?> 