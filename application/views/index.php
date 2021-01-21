<div class="theme-container-fluid">
    <section class="theme-row">
        <div class="col">
            <div class="form-section">
                <h1 class="form-heading">
                    My Task Board
                </h1>
                <div class="form-block">
                	<form method="POST" id="taskForm" action="" data-parsley-validate>
                        <div class="theme-row">
                            <div class="col">
                                <div class="form-group input-block">
                                	<input type="text" name="task_name" class="form-input" placeholder="Task name" autocomplete="off"  required="" data-parsley-required-message="Task Title is required.">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group input-block">
                                    <input type="text" name="task_date" class="form-input datepicker date-mask" placeholder="MM/DD/YYYY" autocomplete="off" required="" data-parsley-required-message="Task date is required." data-parsley-pattern="^[0-9]{2}/[0-9]{2}/[0-9]{4}$" data-parsley-pattern-message ="Invalid date">
                                </div>
                            </div>
                        </div>
                        <div class="theme-row">
                            <div class="col">
                                <div class="form-group comment-block" placeholder="date">
                                	<textarea name="task_description" rows="4" cols="50" required="" data-parsley-required-message="Task description is required." placeholder="Task description"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="button-group">
                            <button class="button-block">
                            Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="text-content-section">
        <ul class="text-content-block" id="taskList"> </ul>
    </section>
</div>