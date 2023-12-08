<template>
    <Line :data="data" :options="options" />
  </template>

  <script lang="ts">
  import {
    Chart as ChartJS,
    CategoryScale,
    LinearScale,
    PointElement,
    LineElement,
    Title,
    Tooltip,
    Legend
  } from 'chart.js'
  import { Line } from 'vue-chartjs'

  ChartJS.register(
    CategoryScale,
    LinearScale,
    PointElement,
    LineElement,
    Title,
    Tooltip,
    Legend
  )

  export default {
    name: 'App',
    props : ['arrayDates'],
    components: {
      Line
    },
    data() {
      return {
        data : {
            labels:['Segunda','Terça', 'Quarta',"Quinta","Sexta","Sábado","Domingo"] ,
            datasets: [
                {
                label: 'Data One',
                backgroundColor: '#f87979',
                //Calcular Média Por Semana
                data: this.arrayDates
                }
            ]
        },
        options : {
            responsive: true,
            maintainAspectRatio: false,

        }
      }
    },
  }
  </script>
