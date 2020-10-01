<?php
define('DB_NAME', '/media/arhasan/Othres/PHP-learn/crud/templates/db.txt');
function seed()
{
    $data = array(
        array(
            'id' => 1,
            'fname' => 'Hasan',
            'lname' => 'ahmed',
            'roll' => 10,
        ),
        array(
            'id' => 2,
            'fname' => 'Aman',
            'lname' => 'ahmed',
            'roll' => 11,
        ),
        array(
            'id' => 3,
            'fname' => 'Nahid',
            'lname' => 'ahmed',
            'roll' => 12,
        ),
        array(
            'id' => 4,
            'fname' => 'jamil',
            'lname' => 'ahmed',
            'roll' => 13,
        ),
        array(
            'id' => 5,
            'fname' => 'Hussam',
            'lname' => 'ahmed',
            'roll' => 14,
        ),
        array(
            'id' => 6,
            'fname' => 'Monir',
            'lname' => 'ahmed',
            'roll' => 15,
        ),
    );
    $serializedData = serialize($data);
    file_put_contents(DB_NAME, $serializedData, LOCK_EX);
}

function generateReport()
{
    $serializedData = file_get_contents(DB_NAME);
    $students = unserialize($serializedData);
    ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Roll</th>
            <?php if (isAdmin() || isEditor()): ?>
            <th width="25%">Action</th>
            <?php endif; ?>
        </tr>
        <?php
        foreach ($students as $student) {
            ?>
            <tr>
                <td><?php printf('%d', $student['id']) ?></td>
                <td><?php printf('%s %s', $student['fname'], $student['lname']); ?></td>
                <td><?php printf('%s', $student['roll']); ?></td>
                <?php if (isAdmin()): ?>
                    <td><?php printf('<a href="/crud/index.php?task=edit&id=%s">Edit</a> | <a class="delete" href="/crud/index.php?task=delete&id=%s">Delete</a>', $student['id'], $student['id']); ?></td>
                <?php elseif (isEditor()): ?>
                    <td><?php printf('<a href="/crud/index.php?task=edit&id=%s">Edit</a>',$student['id']); ?></td>
                <?php endif; ?>
            </tr>
            <?php
        }
        ?>
    </table>
    <?php
}

function addStudent($fname, $lname, $roll)
{
    $found = false;
    $serializedData = file_get_contents(DB_NAME);
    $students = unserialize($serializedData);
    foreach ($students as $_student) {
        if ($_student['roll'] == $roll) {
            $found = true;
            break;
        }
    }
    if (!$found) {
        $newId = getNewId($students);
        $student = array(
            'id' => $newId,
            'fname' => $fname,
            'lname' => $lname,
            'roll' => $roll,
        );
        array_push($students, $student);
        $serializedData = serialize($students);
        file_put_contents(DB_NAME, $serializedData, LOCK_EX);
        return true;
    }
    return false;
}

function getStudent($id)
{
    $serializedData = file_get_contents(DB_NAME);
    $students = unserialize($serializedData);
    foreach ($students as $student) {
        if ($student['id'] == $id) {
            return $student;
        }
    }
    return false;
}

function updateStudent($id, $fname, $lname, $roll)
{
    $serializedData = file_get_contents(DB_NAME);
    $students = unserialize($serializedData);

    foreach ($students as $_student) {
        if ($_student['roll'] == $roll && $_student['id'] != $id) {
            $found = true;
            break;
        }
    }
    if (!$found) {
        $students[$id - 1]['fname'] = $fname;
        $students[$id - 1]['lname'] = $lname;
        $students[$id - 1]['roll'] = $roll;
        $serializedData = serialize($students);
        file_put_contents(DB_NAME, $serializedData, LOCK_EX);
        return true;
    }
    return false;
}

function deleteStudent($id)
{
    $serializedData = file_get_contents(DB_NAME);
    $students = unserialize($serializedData);

    foreach ($students as $offset => $student) {
        if ($student['id'] == $id) {
            unset($students[$offset]);
        }
    }
    $serializedData = serialize($students);
    file_put_contents(DB_NAME, $serializedData, LOCK_EX);
}

function printRaw()
{
    $serializedData = file_get_contents(DB_NAME);
    $students = unserialize($serializedData);
    print_r($students);
}

function getNewId($students)
{
    $maxId = max(array_column($students, 'id'));
    return $maxId + 1;
}

function isAdmin()
{
    return ('admin' == $_SESSION['role']);
}

function isEditor()
{
    return ('editor' == $_SESSION['role']);
}
function hasPrivilege(){
    return (isAdmin() || isEditor());
}