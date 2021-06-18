<?php

    MercadoPago\SDK::setAccessToken(ACCESS_TOKEN_MARKETPLACE);
    MercadoPago\SDK::setIntegratorId(getenv('MP_DEV_CODE'));
    $info = json_decode($this->input->raw_input_stream);


                // Actualizo la información de pago recibida.
                $or_collection_id = $info->data->id;
                $info = MercadoPago\Payment::find_by_id($or_collection_id);
                $or_number = $info->external_reference;

                $data_update = array(
                    'or_collection_status' => $info->status,
                    'or_collection_status_detail' => $info->status_detail,
                    'or_payment_type' => $info->payment_type_id,
                    'or_payment_method' => $info->payment_method_id,
                    'or_status' => gcfg($info->status,'or_status_collection_status')
                );

  $this->cart->update_ipn_order($data_update,$or_number);


    $this->output->set_status_header(200);
    return;
?>
