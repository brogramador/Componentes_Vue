<template>
    <Row>
        <div class="bg-success">
            <h1>Componente A</h1>
            <Col span="12">
            Color 1
            <ColorPicker v-model="Carga_Color_1" />
            </Col>
            <Col span="12">
            Color 2
            <ColorPicker v-model="Carga_Color_2" />
            </Col>
        </div>




    </Row>

</template>
<script>
    export default {
        data () {
            return {
                color1:this.color_1,
                color2:this.color_2
            }
        },

        computed: {
            Carga_Color_1() {
                return  this.color_1;
            },
            Carga_Color_2() {
                return  this.color_2;
            }
        },
        props: ['color_1',"color_2"],

    }
</script>
