<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- tailwind css -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        navbar: '#020617',
                        subMenu: '#0f172a',
                        subMenu2: '#1e293b',
                        body: '#020617',
                        title: '#f1f5f9',
                        bgArticle: '#0f172a'
                    }
                }
            }
        }
    </script>
    <!-- ckeditor -->
    <script src="<?= base_url('build/ckeditor.js') ?>"></script>
    <!-- flowbite css -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <title><?= $title ?></title>
</head>

<body class="bg-body">
    <?= $this->include('admin/layout/navbar') ?>

    <?= $this->renderSection('content') ?>
    <!-- flowbite js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <!-- ck editor -->
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .then(editor => {
                editor.resize('100%', '900px', true);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
</body>

</html>