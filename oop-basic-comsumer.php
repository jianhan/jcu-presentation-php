<html>
    <head></head>
    <body>
        <?php require_once('oop-basic.php'); ?>
        <?php require_once('fill-attendance-rate.php'); ?>
        <?php $jcu = createJamesCookUniversity(); ?>
        <?php fillAttendanceRate($jcu); ?>

        <table>
            <h1><?= $jcu->name; ?></h1>
            <h2><?= $jcu->address; ?></h2>
            <tr>
                <th>Name</th>
                <th>Gender</th>
                <th>Attendance Rate</th>
                <th>Course Results</th>
            </tr>
            <?php foreach($jcu->students as $student): ?>
            <tr>
                <td><?= $student->name; ?></td>
                <td><?= $student->gender; ?></td>
                <td><?= $student->attendanceRate; ?></td>
                <td>
                    <ul>
                    <?php foreach($student->courseResults as $courseName => $courseResult): ?>
                        <li><?= $courseName; ?> = <?= $courseResult; ?></li>
                    <?php endforeach; ?>
                    </ul>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>