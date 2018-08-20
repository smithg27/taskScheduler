<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">{{ task.title }}</div>

                    <div class="card-body">
                        {{ task.description }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                task: {
                    title: "testTitle",
                    description: 'test Description'
                }
            }
        }
    }
</script>
