<template>
    <Row>
        <h1>Componente A</h1>
        <Col span="12">
        Color 1
        <ColorPicker v-model="color1" />
        </Col>
        <Col span="12">
        Color 2
        <ColorPicker v-model="color2" />
        </Col>

        <div class="col-md-12 bg-success">
            <div class="form-group row">
                <label  class="col-md-5 col-form-label" style="text-align: center">Cambiar Color 1</label>
                <div class="col-md-7">
                    <select v-model="color1" class="form-control col-md-6">
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
                    <select v-model="color2" class="form-control col-md-6">
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
                color1: '#0248FC',
                color2: '#02FC10'
            }
        }


    }
</script>
