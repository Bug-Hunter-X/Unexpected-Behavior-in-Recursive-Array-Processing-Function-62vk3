```php
function processData(array $data): array {
  // Handle empty input
  if (empty($data)) {
    return [];
  }

  $processedData = []; // Create a new array to store the processed data
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $processedData[$key] = $this->processData($value); // Recursive call
    } elseif (is_string($value)) {
      $processedData[$key] = strtolower($value);
    } else {
      $processedData[$key] = $value; // Keep other data types as they are
    }
  }

  return $processedData;
}
```