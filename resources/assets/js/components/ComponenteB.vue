<template>
    <Row>

        <h1 style="color: #000000">Componente B</h1>
        <div class="col-md-12">
            <div class="form-group row">
                <label  class="col-md-5 col-form-label" style="text-align: center">Cambiar Color 1</label>
                <div class="col-md-7">
                    <select @change="cambio_color1" v-model="color1" class="form-control col-md-6">
                        <option value="#FFFFFF" >Blanco</option>
                        <option value="#0248FC" >Azul</option>
                        <option value="#02FC10" >Verde</option>
                        <option value="#F5FC02" >Amarillo</option>
                        <option value="#FC0202" >Rojo</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group row">
                <label  class="col-md-5 col-form-label" style="text-align: center">Cambiar Color 2</label>
                <div class="col-md-7">
                    <select  @change="cambio_color2" v-model="color2" class="form-control col-md-6">
                        <option value="#FFFFFF" >Blanco</option>
                        <option value="#0248FC" >Azul</option>
                        <option value="#02FC10" >Verde</option>
                        <option value="#F5FC02" >Amarillo</option>
                        <option value="#FC0202" >Rojo</option>
                    </select>
                </div>
            </div>
        </div>
    </Row>

</template>
<script>
    export default {
        data () {
            return {
                color1: '#19be6b',
                color2: '#2D2D2D'
            }
        },
        methods: {
            cambio_color1: function () {
                this.$emit('update_color1', this.color1)
            },
            cambio_color2: function () {
                this.$emit('update_color2', this.color2)
            }
        }
    }
</script>
