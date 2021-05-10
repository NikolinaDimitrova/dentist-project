<template>
  <div>
    <div class="card">
      <div class="card-header">Find Doctors</div>
      <div class="card-body">
        <datepicker
          class="my-datepicker"
          calendar-class="my-datepicker_calendar"
          :disabledDates="disabledDates"
          :format="customDate"
          v-model="time"
          :inline="true"
        ></datepicker>
      </div>
    </div>

    
    <div class="card">
      <div class="card-header">Doctors</div>
      <div class="card-body">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>Photo</th>
              <th>Name</th>
              <th>Expertise</th>
              <th>Booking</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="doctor in doctors" :key="doctor.id">
              <th scope="row"></th>
              <td>
                <img :src="'/images/' + doctor.doctor.image" width="80" />
              </td>
              <td>{{ doctor.doctor.name }}</td>
              <td>{{ doctor.doctor.department }}</td>
              <td>
                <a
                  :href="
                    '/new-appointment/' + doctor.user_id + '/' + doctor.date
                  "
                  ><button class="btn btn-success">Book Appointment</button></a
                >
              </td>
            </tr>
            <td v-if="doctors.length == 0">
              No doctors available for {{this.time}}
            </td>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>

<script>
import datepicker from "vuejs-datepicker";
import moment from "moment";
import axios from "axios";

export default {
  data() {
    return {
      time: "",
      doctors: [],
      disabledDates: {
        to: new Date(Date.now() - 86400000),
      },
    };
  },

  components: {
    datepicker,
  },
  methods: {
    customDate(date) {
      this.time = moment(date).format("YYYY-MM-DD");
      axios
        .post("/api/finddoctors", { date: this.time })
        .then((response) => {
          this.doctors = response.data;
        })
        .catch((error) => {
          alert(error);
        });
    }
    
  },

  mounted() {
    axios.get("/api/doctors/today").then(response => {
      this.doctors = response.data;
    });
  },
};
</script>

 