<!-- <?php
/**
 * @file
 * Contains various helper functions.
 */
//use Drupal\taxonomy\Entity\Term;
/**
 * Helper function to create a taxonomy term programmatically.
 *
 * @code
 * // Create top level term
 * $term_id = _nodemaker_term_create('My Term', 'my_vocab', []);
 *
 * // Create term with parent term with an id of 999
 * $term_id = _nodemaker_term_create('My Term', 'my_vocab', [999]);
 * @endcode
 *
 //* @param string $term
 *   - Term Name.
 * @param string $vocabulary
 *   - System id of the vocabulary term will be added to.
 * @param array $parent
 *   - Array of term ids to be assigned as parent.
 *
 * @return int|null
 *   - Returns the term id of the created term on success, null on failure.
//  */
// function ausy_test_term_create($term, $vocabulary, array $parent = []) {
//   // Create the taxonomy term.
//   $list = \Drupal::service('country_manager')->getList();
//   $vocabulary = ''

//   $new_term = Term::create([
//     'name' => $list,
//     'vid' => $vocabulary,
//     'parent' => $parent,
//   ]);
//   // Save the taxonomy term.
//   $new_term->save();
//   // Return the taxonomy term id.
//   return $new_term->id();
// } -->