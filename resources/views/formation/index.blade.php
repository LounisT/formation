@extends('formation.app')
@section('dashboard_index')

    <script src="https://www.paypal.com/sdk/js?client-id=AZX5en-0gxV-cjJ_Oktrupzv57t_jezrbaWg2OVqqq_H2AqVgeuCzQ3PeEhFd2EHaV6nYdjFo4oK64nI"></script>

    <div class="flex flex-wrap -mx-4">
        <div class="w-full lg:w-1/2 px-4">
            <div class="bg-white border-t border-b sm:rounded sm:border shadow">
                <div class="border-b">
                    <div class="flex justify-between px-6 -mb-px">
                        <h3 class="text-blue-dark py-4 font-normal text-lg">Formation 1</h3>
                    </div>
                </div>
                <div>
                    <div class="text-center px-6 py-4">
                        <div class="py-8">
                            <div class="mb-4">
                                <svg class="inline-block fill-current text-grey h-16 w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M11.933 13.069s7.059-5.094 6.276-10.924a.465.465 0 0 0-.112-.268.436.436 0 0 0-.263-.115C12.137.961 7.16 8.184 7.16 8.184c-4.318-.517-4.004.344-5.974 5.076-.377.902.234 1.213.904.959l2.148-.811 2.59 2.648-.793 2.199c-.248.686.055 1.311.938.926 4.624-2.016 5.466-1.694 4.96-6.112zm1.009-5.916a1.594 1.594 0 0 1 0-2.217 1.509 1.509 0 0 1 2.166 0 1.594 1.594 0 0 1 0 2.217 1.509 1.509 0 0 1-2.166 0z"/></svg>
                            </div>
                            <p class="text-2xl text-grey-darker font-medium mb-4">Communication</p>
                            <p class="text-grey max-w-xs mx-auto mb-6">Voici la première formation, pour le prix de 399,90€ HT</p>
                            <div>
                                <button type="button" class="bg-blue hover:bg-blue-dark text-white border border-blue-dark rounded px-6 py-4">En savoir plus</button>
                                <div class="text-center px-6 py-4" id="paypal-button-container"></div>

                                <script>
                                    paypal.Buttons({
                                        createOrder: function(data, actions) {
                                            // This function sets up the details of the transaction, including the amount and line item details.
                                            return actions.order.create({
                                                purchase_units: [{
                                                    amount: {
                                                        value: '399.99'
                                                    }
                                                }]
                                            });
                                        }
                                    }).render('#paypal-button-container');
                                    // This function displays Smart Payment Buttons on your web page.
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full lg:w-1/2 px-4">
            <div class="bg-white border-t border-b sm:rounded sm:border shadow">
                <div class="border-b">
                    <div class="flex justify-between px-6 -mb-px">
                            <h3 class="text-blue-dark py-4 font-normal text-lg">Formation 2</h3>
                    </div>
                </div>
                <div>
                    <div class="text-center px-6 py-4">
                        <div class="py-8">
                            <div class="mb-4">
                                <svg class="inline-block fill-current text-grey h-16 w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M11.933 13.069s7.059-5.094 6.276-10.924a.465.465 0 0 0-.112-.268.436.436 0 0 0-.263-.115C12.137.961 7.16 8.184 7.16 8.184c-4.318-.517-4.004.344-5.974 5.076-.377.902.234 1.213.904.959l2.148-.811 2.59 2.648-.793 2.199c-.248.686.055 1.311.938.926 4.624-2.016 5.466-1.694 4.96-6.112zm1.009-5.916a1.594 1.594 0 0 1 0-2.217 1.509 1.509 0 0 1 2.166 0 1.594 1.594 0 0 1 0 2.217 1.509 1.509 0 0 1-2.166 0z"/></svg>
                            </div>
                            <p class="text-2xl text-grey-darker font-medium mb-4">Informatique</p>
                            <p class="text-grey max-w-xs mx-auto mb-6">Voici la deuxième formation, pour le prix de 599,90€ HT</p>
                            <div>
                                <button type="button" class="bg-blue hover:bg-blue-dark text-white border border-blue-dark rounded px-6 py-4">En savoir plus</button>
                                <button type="button" class="bg-blue hover:bg-blue-dark text-white border border-blue-dark rounded px-6 py-4">Acheter</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('name')
    {{ Auth::user()->name }}
@endsection