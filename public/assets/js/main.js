// DATATABLES
let datasTable = $("#datas-table")
    .DataTable({
        // responsive: true,
        // dom: 'rlftip',
        pageLength: 25,
        dom: 't<"grid p-4 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800" <"flex items-center col-span-3" i><"col-span-2"> <"flex col-span-4 mt-2 sm:mt-auto sm:justify-end"p>><"clear">',
        language: {
            decimal: "",
            emptyTable: "Aucun élément disponible",
            info: "Affichage de _START_ à _END_ parmi _TOTAL_ élements",
            infoEmpty: "Aucun élément",
            infoFiltered: "(filtrés parmi _MAX_ éléments)",
            infoPostFix: "",
            thousands: ",",
            lengthMenu: "Affichage de _MENU_ éléments",
            loadingRecords: "Chargement",
            processing: "",
            search: "Rechercher:",
            paginate: {
                first: "First",
                last: "Last",
                next: "Suivant",
                previous: "Précédent ",
            },
        },
    })
    .columns.adjust()
    .responsive.recalc();
$("#custom-search-input").keyup(function () {
    datasTable.search($(this).val()).draw();
});

// var tableTools = $.fn.dataTable.TableTools( datasTable, {
//     buttons: [
//         { extend: 'copy', className: 'btn-main' },
//         { extend: 'excel', className: 'btn-main' },
//         { extend: 'print', className: 'btn-main'}
//     ],
// } );
// $( tableTools.fnContainer() ).insertIn('div.table-search-container');

// LIVEWIRE & SELECT2
// $(document).ready(function () {
//     $(".simple-select").select2();
//     $(".multiple-select").select2();
//     $(".simple-select-creatable").select2({
//         tags: true,
//     });
// });

// DELETE CONFIRMATION  MODAL CUSTOMIZING...

// let deleteConfirmation = function (e) {
//     console.log(e)
//     if(typeof(swal) !== 'undefined') {
//         swal({
//             title: "Suppression",
//             text: "Cet element sera supprimé",
//             dangerMode: true,
//             icon: "warning",
//             buttons: {
//                 cancel: true,
//                 confirm: "Oui, Supprimer",
//             },
//             cancel: true,
//         }).then((value) => {
//             if(value) {
//                 e.submit();
//             }
//             else {
//                 swal("Suppression annulée", {
//                     timer: 2000,
//                 });
//             }
//         });
//     }
//     else {
//         value = confirm('Voulez vous vraiment supprimer ?')
//         if(value) {
//             e.submit();
//         }
//     }
//     // e.submit();
// }

let deleteConfirmation = function (e) {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: "btn bg-red-600 text-white",
            cancelButton: "btn btn-secondary mr-4",
        },
        buttonsStyling: false,
    });

    swalWithBootstrapButtons
        .fire({
            title: "Confirmation ",
            text: "Voulez vous supprimer cet element ?!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Oui, supprimer!",
            cancelButtonText: "Non, annuler!",
            reverseButtons: true,
        })
        .then((result) => {
            if (result.isConfirmed) {
                e.submit();
            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                    "Suppression annulée",
                    "Le modele n'a pas été supprimé",
                    "info"
                );
            }
        });
};

let confirmSavingContract = function (e, submitBtn) {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: "btn btn-main",
            cancelButton: "btn btn-secondary mr-4",
        },
        buttonsStyling: false,
    });

    swalWithBootstrapButtons
    .fire({
        title: "Confirmation ",
        text: "Voulez vous enregistrer le contrat avec les informations actuelles et les signatures ?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Oui, Enregistrer!",
        cancelButtonText: "Non, annuler!",
        reverseButtons: true,
    })
    .then((result) => {
        if (result.isConfirmed) {
            submitBtn.disabled = true;
            e.submit();
        } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
        ) {
            swalWithBootstrapButtons.fire(
                "Annulé",
                "L'enregistrement du contrat a été annulé",
                "info"
            );
        }
    });
    
};

