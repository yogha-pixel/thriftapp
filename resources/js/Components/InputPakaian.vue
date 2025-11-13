<template>
    <div>
        <label for="pakaian" class="block text-sm font-medium text-gray-700">
            Pakaian
        </label>
        <input
            id="pakaian"
            v-model="modelValue"
            type="text"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
            @input="$emit('update:modelValue', $event.target.value)"
        />
        <p v-if="error" class="mt-2 text-sm text-red-600">{{ error }}</p>
    </div>
</template>

<script setup>
defineProps({
    modelValue: {
        type: String,
        default: '',
    },
    error: {
        type: String,
        default: null,
    },
});

defineEmits(['update:modelValue']);
</script>
