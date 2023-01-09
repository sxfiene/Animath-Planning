<div class="ps-5 container">
    <div class="ps-5 ms-5 row gap-5">
        <?php foreach ($stands as $stand):
            $id = $stand->getId();
            $title = $stand->getTitle();
            $desc = $stand->getDesc();?>
            <div class="modal fade" id="<?php echo e("standCalendar$id") ?>" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-body" style="height: 50rem">
                            <div class="h-75" id="calendar<?php echo e("$id") ?>">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button id="buttonAjout<?php echo e("$id")?>" class="btn btn-secondary" >Ajouter</button>
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Sauvegarder</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow col-3" style="height: 15rem">
                <div class="card-header p-3">
                    <?php echo e("$title") ?>
                </div>
                <div class="card-body overflow-scroll p-3">
                    <?php echo e("$desc"); ?>
                </div>
                <div class="card-footer">
                    <a class="btn btn-primary" href="<?php echo e("#standCalendar$id")?>" data-bs-toggle="modal">Gerer le planing</a>
                </div>
            </div>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    let calendarEl = document.getElementById('calendar<?php echo e("$id") ?>');
                    let calendar = new FullCalendar.Calendar(calendarEl, {
                        initialView: 'timeGridDay',
                        locale: 'fr',
                        editable: true,
                        allDaySlot: false,
                        events: [
                            {
                                title: '<?php echo e("$id") ?>',
                                start: '2023-01-06T15:00:00'
                            }
                        ]
                    });
                    calendar.render();
                });
            </script>
        <?php endforeach; ?>
    </div>
</div>
