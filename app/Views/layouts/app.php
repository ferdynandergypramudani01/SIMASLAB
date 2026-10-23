<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title><?= $title ?? 'Sistem Manajemen Aslab' ?></title>

    <link
        rel="stylesheet"
        href="<?= base_url('assets/css/output.css') ?>"
    >

</head>


<body class="bg-slate-50 text-slate-900">

    <!-- Navbar -->
    <?= $this->include('components/navbar') ?>


    <!-- Sidebar -->
    <?= $this->include('components/sidebar') ?>


    <!-- Main Content -->
    <main class="min-h-screen lg:ml-72">

        <?= $this->renderSection('content') ?>

    </main>


    <!-- JavaScript -->
    <script src="<?= base_url('js/app.js') ?>"></script>

</body>

</html>