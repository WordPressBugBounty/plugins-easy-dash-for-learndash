<?php
//2.4.4
// JSON GLOBAL
esc_html__('Students', 'learndash-easy-dash');
esc_html__('Total', 'learndash-easy-dash');
esc_html__('Groups', 'learndash-easy-dash');
esc_html__('Comments', 'learndash-easy-dash');
esc_html__('Total for LD', 'learndash-easy-dash');
esc_html__('Courses', 'learndash-easy-dash');
esc_html__('Lessons', 'learndash-easy-dash');
esc_html__('Topics', 'learndash-easy-dash');
esc_html__('Quizzes', 'learndash-easy-dash');
esc_html__('Course Enrolls', 'learndash-easy-dash');
esc_html__('Last %d days', 'learndash-easy-dash');
esc_html__('Course Starts', 'learndash-easy-dash');
esc_html__('Course Completions', 'learndash-easy-dash');
esc_html__('Essays Pending', 'learndash-easy-dash');
esc_html__('Assignments Pending', 'learndash-easy-dash');
esc_html__('Open Courses - Top %d (#enrolled)', 'learndash-easy-dash');
esc_html__('Free Courses - Top %d (#enrolled)', 'learndash-easy-dash');
esc_html__('Paynow Courses - Top %d (#enrolled)', 'learndash-easy-dash');
esc_html__('Subscribe Courses - Top %d (#enrolled)', 'learndash-easy-dash');
esc_html__('Closed Courses - Top %d (#enrolled)', 'learndash-easy-dash');
esc_html__('Groups - Top %d (#members)', 'learndash-easy-dash');
esc_html__('Most Active Students', 'learndash-easy-dash');
esc_html__('All time', 'learndash-easy-dash');
esc_html__('Most Commenting Users', 'learndash-easy-dash');
esc_html__('approved or on hold, all time', 'learndash-easy-dash');
esc_html__('Most Completed Courses (last %d days)', 'learndash-easy-dash');
esc_html__('Most Completed Lessons (last %d days)', 'learndash-easy-dash');
esc_html__('Most Completed Topics (last %d days)', 'learndash-easy-dash');
esc_html__('Most Completed Quizzes (last %d days)', 'learndash-easy-dash');
esc_html__('Courses With More Comments', 'learndash-easy-dash');
esc_html__('Comments in course or in its content (lessons, topics, quizzes...)', 'learndash-easy-dash');
esc_html__('Courses Completed in The Same Day - Top %d (#times)', 'learndash-easy-dash');
esc_html__('Courses Stats Over Time', 'learndash-easy-dash');
esc_html__('Lessons Stats Over Time', 'learndash-easy-dash');
esc_html__('Topics Stats Over Time', 'learndash-easy-dash');
esc_html__('Quizzes Stats Over Time', 'learndash-easy-dash');
esc_html__('Courses Completions Stats', 'learndash-easy-dash');
esc_html__('Students Activity (Last %d days)', 'learndash-easy-dash');
// JSON COURSE
esc_html__('enrolled in course', 'learndash-easy-dash');
esc_html__('Completed All Steps', 'learndash-easy-dash');
esc_html__('Average Days', 'learndash-easy-dash');
esc_html__('to complete', 'learndash-easy-dash');
esc_html__('Same Day Completed', 'learndash-easy-dash');
esc_html__('Not Started', 'learndash-easy-dash');
esc_html__('in course', 'learndash-easy-dash');
esc_html__('in lessons course', 'learndash-easy-dash');
esc_html__('associated to course', 'learndash-easy-dash');
esc_html__('made on the course content', 'learndash-easy-dash');
esc_html__('Most Completed Lessons', 'learndash-easy-dash');
esc_html__('Stats Over Time', 'learndash-easy-dash');
esc_html__('Groups - Top %d (#members)', 'learndash-easy-dash');
esc_html__('Groups associated with course', 'learndash-easy-dash');
esc_html__('Course Filtered Students Stats', 'learndash-easy-dash');
// JSON GROUP
esc_html__('members of the group', 'learndash-easy-dash');
esc_html__('associated to the group', 'learndash-easy-dash');
esc_html__('Leaders', 'learndash-easy-dash');
esc_html__('group administrators', 'learndash-easy-dash');
esc_html__('Completions', 'learndash-easy-dash');
esc_html__('course completions', 'learndash-easy-dash');
esc_html__('Group Course Completion Stats', 'learndash-easy-dash');
esc_html__('Group Users', 'learndash-easy-dash');
// JSON USER
esc_html__('enrolled in', 'learndash-easy-dash');
esc_html__('member of', 'learndash-easy-dash');
esc_html__('Points', 'learndash-easy-dash');
esc_html__('from completed courses', 'learndash-easy-dash');
esc_html__('Hours', 'learndash-easy-dash');
esc_html__('spent in courses', 'learndash-easy-dash');
esc_html__('made on courses content', 'learndash-easy-dash');
esc_html__('User Courses Overview', 'learndash-easy-dash');
esc_html__('User Groups Overview', 'learndash-easy-dash');


function tred_elements_translation()
{
    return [
        'edit' => esc_html__('Edit mode', 'learndash-easy-dash'),
        'view' => esc_html__('View mode', 'learndash-easy-dash'),
        'save' => esc_html__('Save changes', 'learndash-easy-dash'),
        'saved' => esc_html__('Saved!', 'learndash-easy-dash'),
        'restore' => esc_html__('Restore all', 'learndash-easy-dash'),
        'select' => esc_html__('select', 'learndash-easy-dash'),
        'go' => esc_html__('go', 'learndash-easy-dash'),
        'alert' => [
            'more_than_x_days' => esc_html__('days for a database query might be too much for your website, depending on how many courses and students it has. You can save and try; if it does not work as expected, go back to reduce this value.', 'learndash-easy-dash'),
            'all_time' => esc_html__('All time? Really? Depending on how many courses and students your website has, it can be a daunting task. You can save and try; if it does not work as expected, go back to reduce this value.', 'learndash-easy-dash'),
        ],
        //2.4.5
        'wait' => esc_html__('wait...', 'learndash-easy-dash'),
    ];
}

function tred_table_translation()
{
    return [
        'emptyTable' => esc_html__('No data available in table', 'learndash-easy-dash'),
        'info' => esc_html__('Showing _START_ to _END_ of _TOTAL_ entries', 'learndash-easy-dash'),
        'infoEmpty' => esc_html__('Showing 0 to 0 of 0 entries', 'learndash-easy-dash'),
        'infoFiltered' => esc_html__('(filtered from _MAX_ total entries)', 'learndash-easy-dash'),
        'lengthMenu' => esc_html__('Show _MENU_ entries', 'learndash-easy-dash'),
        'loadingRecords' => esc_html__('Loading...', 'learndash-easy-dash'),
        'processing' => esc_html__('Processing...', 'learndash-easy-dash'),
        'search' => esc_html__('Search:', 'learndash-easy-dash'),
        'zeroRecords' => esc_html__('No matching records found', 'learndash-easy-dash'),
        'paginate' => [
            'first' => esc_html__('First', 'learndash-easy-dash'),
            'last' => esc_html__('Last', 'learndash-easy-dash'),
            'next' => esc_html__('Next', 'learndash-easy-dash'),
            'previous' => esc_html__('Previous', 'learndash-easy-dash'),
        ],
        'aria' => [
            'sortAscending' => esc_html__(': activate to sort column ascending', 'learndash-easy-dash'),
            'sortDescending' => esc_html__(': activate to sort column descending', 'learndash-easy-dash'),
        ],
        'buttons' => [
            'copy' => esc_html__('Copy', 'learndash-easy-dash'),
            'copySuccess' => [
                '1' => esc_html__('Copied 1 row to clipboard', 'learndash-easy-dash'),
                '_' => esc_html__('Copied %d rows to clipboard', 'learndash-easy-dash'),
            ],
            'copyTitle' => esc_html__('Copy to Clipboard', 'learndash-easy-dash'),
            'csv' => esc_html__('CSV', 'learndash-easy-dash'),
            'excel' => esc_html__('Excel', 'learndash-easy-dash'),
            'pageLength' => [
                '-1' => esc_html__('Show all rows', 'learndash-easy-dash'),
                '_' => esc_html__('Show %d rows', 'learndash-easy-dash'),
            ],
            'pdf' => esc_html__('PDF', 'learndash-easy-dash'),
            'print' => esc_html__('Print', 'learndash-easy-dash'),
            'colvis' => esc_html__('Column visibility', 'learndash-easy-dash'),
        ],
    ];
}

//2.4.5
function tred_ld_price_type_mode_translation($mode)
{
    switch ($mode) {
        case 'free':
            return esc_html__('free', 'learndash-easy-dash');
        case 'paynow':
            return esc_html__('paynow', 'learndash-easy-dash');
        case 'subscribe':
            return esc_html__('subscribe', 'learndash-easy-dash');
        case 'closed':
            return esc_html__('closed', 'learndash-easy-dash');
        case 'open':
            return esc_html__('open', 'learndash-easy-dash');
        default:
            return $mode;
    }
}

//util function used by tred_widgets_translation
function tred_create_translation_array_from_json_array($original_array)
{

    $translation_array = [];
    foreach ($original_array as $array) {

        if (empty($array['widget_type']) || empty($array['translate'])) {
            continue;
        }
        $widget_type = $array['widget_type'];
        $to_translate = $array['translate'];
        if (empty($to_translate)) {
            continue;
        }
        if (!isset($translation_array[$widget_type])) {
            $translation_array[$widget_type] = [];
        }

        foreach ($to_translate as $key) {
            if (!isset($translation_array[$widget_type][$key])) {
                $translation_array[$widget_type][$key] = [];
            }
            $term = $array[$key];
            if (empty($term)) {
                continue;
            }
            if (strpos($term, '%d days') !== false) {
                $translation_array[$widget_type][$key][$term] = sprintf(esc_html__($term, 'learndash-easy-dash'), TRED_LAST_X_DAYS);
                if ('-1' == TRED_LAST_X_DAYS) {
                    $translation_array[$widget_type][$key][$term] = esc_html__(str_ireplace('last %d days', 'all time', $term), 'learndash-easy-dash');
                }
            } else if (strpos($term, 'Top %d') !== false) {
                $translation_array[$widget_type][$key][$term] = sprintf(esc_html__($term, 'learndash-easy-dash'), TRED_SELECT_X_ITEMS);
            } else {
                $translation_array[$widget_type][$key][$term] = esc_html__($term, 'learndash-easy-dash');
            }
        }
    } //end foreach

    return $translation_array;
}


function tred_widgets_translation()
{

    $translation = [];

    $global_json = TRED_GLOBAL;
    if ($global_json && is_string($global_json)) {
        $global_array = json_decode($global_json, true);
        if ($global_array && is_array($global_array)) {
            $translation['global'] = tred_create_translation_array_from_json_array($global_array);
        }
    }

    $course_json = TRED_FILTERED_COURSE;
    if ($course_json && is_string($course_json)) {
        $course_array = json_decode($course_json, true);
        if ($course_array && is_array($course_array)) {
            $translation['sfwd-courses'] = tred_create_translation_array_from_json_array($course_array);
        }
    }

    $user_json = TRED_FILTERED_USER;
    if ($user_json && is_string($user_json)) {
        $user_array = json_decode($user_json, true);
        if ($user_array && is_array($user_array)) {
            $translation['users'] = tred_create_translation_array_from_json_array($user_array);
        }
    }

    // 2.3.1
    $group_json = TRED_FILTERED_GROUP;
    if ($group_json && is_string($group_json)) {
        $group_array = json_decode($group_json, true);
        if ($group_array && is_array($group_array)) {
            $translation['groups'] = tred_create_translation_array_from_json_array($group_array);
        }
    }

    return $translation;
}

function tred_items_labels_translation()
{
    return [
        'sfwd-courses' => esc_html__('course', 'learndash-easy-dash'),
        'sfwd-lessons' => esc_html__('lesson', 'learndash-easy-dash'),
        'sfwd-topic' => esc_html__('topic', 'learndash-easy-dash'),
        'sfwd-quiz' => esc_html__('quiz', 'learndash-easy-dash'),
        'groups' => esc_html__('group', 'learndash-easy-dash'),
        'users' => esc_html__('user', 'learndash-easy-dash'),
    ];
}

function tred_csv_labels_translation()
{
    return [
        'Time Spent in Course' => esc_html__('Time Spent in Course', 'learndash-easy-dash'),
        'Course Report' => esc_html__('Course Report', 'learndash-easy-dash'),
        'Course Students Report' => esc_html__('Course Students Report', 'learndash-easy-dash'),
        'Student Report' => esc_html__('Student Report', 'learndash-easy-dash'),
        'Students Report' => esc_html__('Students Report', 'learndash-easy-dash'),
        'Download CSV' => esc_html__('Download CSV', 'learndash-easy-dash'),
        'Column Visibility' => esc_html__('Column Visibility', 'learndash-easy-dash'),
    ];
}