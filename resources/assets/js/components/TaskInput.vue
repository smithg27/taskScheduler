<template>
    <div class="modal" id="task-input">
        <div class="modal-body">
            <div class="form-control">
                <label for="task-title-input">Title:</label>
                <div class="input-group">
                    <input id="task-title-input" name="title">
                </div>
            </div>
            <div class="form-control">
                <label for="task-assignee-input">Assignee:</label>
                <div class="input-group">
                    <input id="task-assignee-input" name="assignee">
                </div>
            </div>
            <div class="form-control">
                <label for="task-description-input">Description:</label>
                <div class="input-group">
                    <input id="task-description-input" name="description">
                </div>
            </div>
            <div class="form-control">
                <label for="task-dueDate-input">Due Date:</label>
                <div class="input-group">
                    <input id="task-dueDate-input" name="dueDate">
                </div>
            </div>
            <div class="form-control">
                <label for="task-type-input">Type:</label>
                <div class="input-group">
                    <input id="task-type-input" name="type">
                </div>
            </div>
            <div class="form-control">
                <label for="task-location-input">Location:</label>
                <div class="input-group">
                    <input id="task-location-input" name="location">
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                test: 'test',
            }
        }
    }
</script>

<style scoped>

</style>