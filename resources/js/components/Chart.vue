 <template>
    <Pie :data="data" :options="options" />
</template>
<script lang="ts">
import {
    Chart as ChartJS,
    Tooltip,
    Legend,
    ArcElement
} from 'chart.js'
import { Pie } from 'vue-chartjs'

ChartJS.register(ArcElement, Tooltip, Legend)
export default {

    name: 'App',
    props:['aprovacao','neutra','negativa'],
    components: {
       Pie
    },
    data() {
        return {
            data:{
                labels: ['Taxa de Aprovação','Taxa Neutra' ,'Taxa de Desaprovação'],
                datasets: [
                    {
                        backgroundColor: ['#41B883', '#E46651', '#00D8FF', '#DD1B16'],
                        data: [this.aprovacao, this.neutra,this.negativa]
                    }
                ]
            },
            options:{
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                    position: 'bottom', // Posiciona a legenda na lateral
                    },
                },
            }
        }
    }
}
</script>

<style>
</style>


