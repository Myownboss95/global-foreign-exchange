<template>
    <Head :title="props.plan.name"/>
    <breadcrumb
      :title="`Invest in ${props.plan.name} Plan`"
      :crumbs="['Subscriptions', 'Select Amount']"
    />
    <div class="col-lg-4 m-auto">
      <div class="card">
        <div class="card-body">
          <form @submit.prevent="createPayment">
            <FormGroup
              name="name"
              placeholder="Enter Amount"
              label="Enter Amount"
              v-model="form.amount"
            />
            <small class="text-muted text-danger">{{amount_error}}</small>
            <FormButton
              type="submit"
              class="w-100 btn btn-outline-primary mt-3"
              :disabled="form.processing || amount_error != null "
            >
              <ButtonLoader text="Make Payment" :loading="form.processing" />
            </FormButton>
          </form>
        </div>
      </div>
    </div>
  </template>
  
  <script setup>
    import breadcrumb from '@/views/components/layout/breadcrumb.vue';
    import FormGroup from '@/views/components/form/FormGroup.vue';
    import FormSelect from '@/views/components/form/FormSelect.vue';
    import FormButton from '@/views/components/form/FormButton.vue';
    import ButtonLoader from '@/views/components/form/ButtonLoader.vue';
    import { useForm } from '@inertiajs/inertia-vue3';
    import { ref,watch } from 'vue';
  
    const props = defineProps({
    plan: Object, 
  })
    const form = useForm({
      amount: '',
      name: props.plan?.name
    })
    
    const amount_error =ref(null);
    watch(
            () => form.amount,
            (amount) => {
              if (amount < props.plan.min_investment || amount =='') {
                amount_error.value = `Please enter an amount greater than $ ${props.plan.min_investment}`
              }
              else if(amount >= props.plan.min_investment && amount <= props.plan.max_investment){
                amount_error.value = null
              }
              else if(amount > props.plan.max_investment ){
                amount_error.value = `Please enter an amount less than $ ${props.plan.max_investment}`
              }
            }
          );
  
    const createPayment = () => {
          form.post(route('user.subscriptions.subscribe', props.plan.id));
    };
  </script>
  
  <style>
  </style>
  