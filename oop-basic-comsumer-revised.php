<html>
    <head></head>
    <body>
        <?php require_once('oop-basic-revised.php'); ?>
        <?php require_once('fill-attendance-rate-revised.php'); ?>
        <?php $jcu = createJamesCookUniversity(); ?>
        <?php fillAttendanceRateRevised($jcu); ?>

        <table>
            <h1><?= $jcu->getName(); ?></h1>
            <h2><?= $jcu->getAddress(); ?></h2>
            <tr>
                <th>Name</th>
                <th>Gender</th>
                <th>Attendance Rate</th>
                <th>Course Results</th>
            </tr>
            <?php foreach($jcu->getStudents() as $student): ?>
            <tr>
                <td><?= $student->getName(); ?></td>
                <td><?= $student->getGender(); ?></td>
                <td><?= $student->getAttendanceRate(); ?></td>
                <td>
                    <ul>
                    <?php foreach($student->getCourseResults() as $courseName => $courseResult): ?>
                        <li><?= $courseName; ?> = <?= $courseResult; ?></li>
                    <?php endforeach; ?>
                    </ul>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>