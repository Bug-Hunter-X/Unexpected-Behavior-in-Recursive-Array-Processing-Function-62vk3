```php
function processData(array $data): array {
  // Check if the array is empty
  if (empty($data)) {
    return []; // Return an empty array if the input is empty
  }

  // Iterate through the data
  foreach ($data as $key => $value) {
    // Check if value is an array, if yes call recursively
    if (is_array($value)) {
      $data[$key] = $this->processData($value); 
    } else {
      //This line is problematic
      if (is_string($value)) {
          $data[$key] = strtolower($value); 
      }
    }
  }

  return $data;
}
```