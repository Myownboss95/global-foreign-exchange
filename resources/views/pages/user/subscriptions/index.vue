<template>
  <Head title="My Subscriptions" />
  <breadcrumb title="Subscriptions" :crumbs="['Dashboard', 'Subscriptions']" />
  <div class="card shadow-lg col-lg-10 mx-auto radius-20">
    <div class="card-body">
        <div class="table-responsive">
          <table class="table">
              <thead>
                  <tr>
                    <th>Amount</th>
                      <th>Plan</th>
                      <th>Bonus</th>
                      <th>Status</th>
                  </tr>
              </thead>

              <tbody v-if="activeSubscription.length">
                <tr v-for="(activeSubscriptions, key) in activeSubscription" :key="key">
                      <td>{{ format_money(activeSubscriptions.amount) }}</td>
                      <td>{{ activeSubscriptions.plan.name }} Plan</td>
                      <td>{{ activeSubscriptions.plan.bonus }}%</td>
                      <td>{{ activeSubscriptions.status }}</td>
                </tr>
              </tbody>
              <tbody v-else>
                <tr>
                    <td colspan="10" class="text-muted text-center">No Active Subscriptions found</td>
                </tr>
              </tbody>
          </table>
        </div>
        <div class="d-flex justify-content-center" v-if="activeSubscription.length">
            <Paginator :links="links" />
        </div>
    </div>
  </div>
</template>

<script setup>
import breadcrumb from '@/views/components/layout/breadcrumb.vue';
import { computed } from 'vue';
import Paginator from '@/views/components/paginator.vue';
import FormButton from '@/views/components/form/FormButton.vue';
import ButtonLoader from '@/views/components/form/ButtonLoader.vue';
import { useForm } from '@inertiajs/inertia-vue3';

const props = defineProps({
    activeSubscription: Object,
})
const activeSubscription = computed(() => props.activeSubscription.data);
const links = computed(() => props.activeSubscription.links);





</script>

<style>

</style>
