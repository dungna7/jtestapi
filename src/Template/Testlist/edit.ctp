<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Testlist $testlist
 */
?>

<?= $this->Html->css('jquery.dataTables.min.css') ?>
<?= $this->Html->script('jquery.dataTables.min.js') ?>
<script type="text/javascript">
    var _csrfToken = "<?= $this->request->getparam('_csrfToken')?>"
    /* 
     * To change this license header, choose License Headers in Project Properties.
     * To change this template file, choose Tools | Templates
     * and open the template in the editor.
     */


    $(document).ready(function () {
        var table = $('#example').DataTable({
//        "processing": true,
//        "serverSide": true,
            "ajax": {
                "url": "/testlist/getAllQuestionDetail/<?= $testID?>.json",
            },
            "columns": [
                {"data": false},
                {"data": "questionID"},
                {"data": "content"},
                {"data": "choiceA"},
                {"data": "choiceB"},
                {"data": "choiceC"},
                {"data": "choiceD"},
                {"data": "type"},
                {"data": "level"},
            ],
            "columnDefs": [
                {
                    // The `data` parameter refers to the data for the cell (defined by the
                    // `data` option, which defaults to the column being worked with, in
                    // this case `data: 0`.
                    "render": function (data, type, row) {
                        return'<input type="checkbox" name="vehicle" value="Bike">';
                    },
                    "targets": 0,
                    "orderable": false
                },
            ]
        });
        $('#example tbody').on('click', 'input', function () {
            var data = table.row($(this).parents('tr')).data();
            alert(data[ "questionID"] + "'s salary is: " + data[ "content"]);
            $.ajax({
                type: "POST",
                url: "/Testquestion/add",
                headers: {
                    'X-CSRF-Token': "<?= $this->request->getparam('_csrfToken')?>"
                },
                data: {"questionID": data[ "questionID"], "testID": <?= $testID ?>},
                success: function (data) {
                    console.log(data);
                }
            });
        }
        );
    });
</script>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $testlist->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $testlist->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Testlist'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="testlist form large-9 medium-8 columns content">
    <?= $this->Form->create($testlist) ?>
    <fieldset>
        <legend><?= __('Edit Testlist') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('author');
            echo $this->Form->control('level');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 ">
                <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
                        <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">About</a>
                    </div>
                </nav>
                <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <table id="example" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" name="vehicle" checked="undefined" value="Bike">All</th>
                                    <th>First name</th>
                                    <th>Last name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Choice</th>
                                    <th>First name</th>
                                    <th>Last name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                    </div>
                    <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                        Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>
