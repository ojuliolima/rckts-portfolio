<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/output.css">
    <title>Portfolio</title>
</head>
<body class="bg-slate-900 text-zinc-100">
    <?php include_once './components/header.php'; ?>

    <main class="mx-auto max-w-screen-lg px-3 py-6">
    <?php include_once './components/hero.php'; ?>
        <section class="space-y-3 py-6">
            <h2 class="text-2xl font-bold" id="projetos">Meus Projetos</h2>
            <?php include_once './components/projetos.php'; ?>
        </section>
    </main>
    <footer class="mx-auto max-w-screen-lg min-h-20">
        <div class="border-t border-gray-600 pt-6 px-3 text-gray-400 text-sm">©️ Copyright <?= date('Y') ?>. Contruído por mim mesmo 😄.</div>
    </footer>
</body>
</html>