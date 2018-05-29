<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>

                    <div class="panel-body">
                        I'm an example component!
                    </div>
                    <el-button type="text" @click="dialogVisible = true">click to open the Dialog</el-button>

                    <el-dialog
                        title="Tips"
                        :visible.sync="dialogVisible"
                        width="30%"
                        :before-close="handleClose"
                    >
                        <span>This is a message</span>
                        <span slot="footer" class="dialog-footer">
                            <el-button @click="dialogVisible = false">Cancel</el-button>
                            <el-button type="primary" @click="dialogVisible = false">Confirm</el-button>
                        </span>
                    </el-dialog>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                dialogVisible: false
            };
        },
        methods: {
            handleClose(done) {
                this.$confirm('Are you sure to close this dialog?')
                    .then(_ => {
                        done();
                    })
                    .catch(_ => {});
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
