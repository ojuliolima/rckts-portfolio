<?php
$projetos = [
    [
        'titulo' => 'Controle de Leitura de Livros',
        'finalizado' => true,
        'ano' => 2024,
        'descricao' => 'Lista de livros. Escrito em PHP e HTML',
        'stack' => [
            ['nome' => 'PHP', 'cor' => 'fuchsia'],
            ['nome' => 'HTML', 'cor' => 'rose'],
            ['nome' => 'CSS', 'cor' => 'sky'],
        ],
        'img' => ['src' => '../assets/img/foto-projeto.png', 'alt' => 'Foto projeto base']
    ],
    [
        'titulo' => 'Controle de Tarefas',
        'finalizado' => false,
        'ano' => 2024,
        'descricao' => 'Lista de tarefas. Escrito em HTML',
        'stack' => [
            ['nome' => 'HTML', 'cor' => 'rose'],
            ['nome' => 'CSS', 'cor' => 'sky'],
            ['nome' => 'Javascript', 'cor' => 'lime'],
        ],
        'img' => ['src' => '../assets/img/foto-projeto.png', 'alt' => 'Foto projeto base']
    ],
    [
        'titulo' => 'Sistema de lavanderia',
        'finalizado' => true,
        'ano' => 2023,
        'descricao' => 'Escrito em Go Lang',
        'stack' => [
            ['nome' => 'Go Lang', 'cor' => 'cyan']
        ],
        'img' => ['src' => '../assets/img/foto-projeto.png', 'alt' => 'Foto projeto base']
    ],
    [
        'titulo' => 'Outro projeto',
        'finalizado' => false,
        'ano' => 2022,
        'descricao' => 'Mais um projeto desenvolvido com mais outra linguagem',
        'stack' => [
            ['nome' => 'PHP', 'cor' => 'fuchsia'],
            ['nome' => 'HTML', 'cor' => 'rose'],
            ['nome' => 'CSS', 'cor' => 'sky'],
            ['nome' => 'Javascript', 'cor' => 'lime'],
        ],
        'img' => ['src' => '../assets/img/foto-projeto.png', 'alt' => 'Foto projeto base']
    ],
];
?>

<?php foreach ($projetos as $projeto): ?>
    <div class="bg-slate-800 rounded-lg pr-5 flex items-center">
        <div class="w-1/5 p-3">
            <img class="rounded" src="<?= $projeto['img']['src'] ?>" alt="<?= $projeto['img']['alt'] ?>">
        </div>
        <div class="w-4/5 space-y-3">
            <div class="flex gap-3 justify-between">
                <h3 class="font-semibold text-xl"><?= $projeto['finalizado'] ? '☑️' : '' ?>     <?= $projeto['titulo'] ?> <span class="text-xs text-gray-400 opacity-50 italic"><?= $projeto['finalizado'] ? "(finalizado em $projeto[ano])" : '' ?> </span></h3>
                <div>
                    <?php foreach ($projeto['stack'] as $tecnologia): ?>
                        <span class="rounded-md px-2 py-1 font-semibold text-xs bg-<?= $tecnologia['cor'] ?>-700 "><?= $tecnologia['nome'] ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
            <p class="leading-6">
                <?= $projeto['descricao'] ?>
            </p>
        </div>
    </div>
<?php endforeach; ?>