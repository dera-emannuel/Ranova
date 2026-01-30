<div class="containers">
    <div class="holders">
            <div class="docholder hospitals">
                <div class="info">
                    <p>Total Hospitals</p>
                    <h3>8000</h3>
                </div>
                <div class="icon">
                    <i class='bx bxs-building-house'></i>
                </div>
            </div>

            <div class="docholder doctors">
                <div class="info">
                    <p>Total Doctors</p>
                    <h3>600</h3>
                </div>
                <div class="icon">
                    <i class='bx bxs-user-plus'></i>
                </div>
            </div>

            <div class="docholder earnings">
                <div class="info">
                    <p>Total Earnings</p>
                    <h3>400</h3>
                </div>
                <div class="icon">
                    <i class='bx bxs-wallet'></i>
                </div>
            </div>

            <div class="docholder pending-doctors">
                <div class="info">
                    <p>Suspended Hospitals</p>
                    <h3>600</h3>
                </div>
                <div class="icon">
                    <i class='bx bxs-user-x'></i>
                </div>
            </div>

            <div class="docholder pending-hospitals">
                <div class="info">
                    <p>Pending Hospitals</p>
                    <h3>400</h3>
                </div>
                <div class="icon">
                    <i class='bx bxs-error-circle'></i>
                </div>
            </div>
    </div>

    <div class="messageAllHospital">
        <div class="btn">
            <button>Message Hospitals</button>
        </div>
        <!-- ===================
         MESSAGE ALL USER MODAL
        =======================-->
        <div class="overlays">
            <div class="formholder">
                <form class="consultationForm">
                    <div class="formHeader">
                        <h2>Message All Hospitals</h2>
                        <span class="closeForm">&times;</span>
                    </div>

                    <div class="formGroup">
                        <input type="text" placeholder="Message Title" required>
                    </div>

                    <div class="formGroup">
                        <textarea placeholder="Enter Message here........" required></textarea>
                    </div>


                    <button type="submit" class="submitBtn" onclick="over()">
                        Send
                    </button>
                </form>
            </div>
        </div>

        <!-- ==========================
         MESSAGE SINGLE USER
        =============================-->

        <div class="overlay">
            <div class="formholder">
                <form class="consultationForm">
                    <div class="formHeader">
                        <h2>Message User</h2>
                        <span class="closeForm">&times;</span>
                    </div>

                    <div class="formGroup">
                        <input type="text" placeholder="Message Title" required>
                    </div>

                    <div class="formGroup">
                        <textarea placeholder="Enter Message here........" required></textarea>
                    </div>


                    <button type="submit" class="submitBtn" onclick="over()">
                        Send
                    </button>
                </form>
            </div>
        </div>

        <!-- ==============================
         EDIT Hospital MODAL
        ==================================-->

        <div class="editModel">
            <div class="formholder">
                <form class="consultationForm">
                    <div class="formHeader">
                        <h2>Edit Hospital Details</h2>
                        <span class="closeForm">&times;</span>
                    </div>

                    <div class="formGroup">
                        <input type="text" placeholder="Hospital Name" required>
                    </div>

                    <div class="formGroup">
                        <input type="number" placeholder="Hospital Phone Number" required>
                    </div>

                    <div class="formGroup">
                        <input type="text" placeholder="Hospital Location" required>
                    </div>

                    <div class="formGroup">
                        <textarea placeholder="About Hospital............"></textarea>
                    </div>

                    <button type="submit" class="submitBtn" onclick="over()">
                        Send
                    </button>
                </form>
            </div>
        </div>

        <div class="hospitalTable">
            <h1>Hospitals Information</h1>

            <div class="hospitalTableWrapper">
                <table class="hospitalModernTable">
                    <thead>
                        <tr>
                            <th>Hospital Name</th>
                            <th>Location</th>
                            <th>Doctors</th>
                            <th>Date</th>
                            <th>Appointments</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Mercy Hospital</td>
                            <td>Owerri, Imo</td>
                            <td>12</td>
                            <td>25 Apr 2026</td>
                            <td>240</td>
                            <td><span class="hospitalStatus approved">Approved</span></td>

                            <td class="hospitalActionCell">
                                <div class="hospitalActionTrigger">
                                    <i class='bx bx-dots-vertical-rounded'></i>
                                </div>

                                <div class="hospitalActionMenu">
                                    <div class="hospitalActionItem messageUser">
                                        <i class='bx bx-message-rounded-dots'></i>
                                        <p>Message Hospital</p>
                                    </div>

                                    <div class="hospitalActionItem">
                                        <i class='bx bx-pause-circle'></i>
                                        <p>Suspend Hospital</p>
                                    </div>

                                    <div class="hospitalActionItem">
                                        <i class='bx bx-show'></i>
                                        <p>View Details</p>
                                    </div>

                                    <div class="hospitalActionItem editHospital">
                                        <i class='bx bx-edit'></i>
                                        <p>Edit Hospital</p>
                                    </div>

                                    <div class="hospitalActionItem danger">
                                        <i class='bx bx-trash'></i>
                                        <p>Delete Hospital</p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Mercy Hospital</td>
                            <td>Owerri, Imo</td>
                            <td>12</td>
                            <td>25 Apr 2026</td>
                            <td>240</td>
                            <td><span class="hospitalStatus approved">Approved</span></td>

                            <td class="hospitalActionCell">
                                <div class="hospitalActionTrigger">
                                    <i class='bx bx-dots-vertical-rounded'></i>
                                </div>

                                <div class="hospitalActionMenu">
                                    <div class="hospitalActionItem messageUser">
                                        <i class='bx bx-message-rounded-dots'></i>
                                        <p>Message Hospital</p>
                                    </div>

                                    <div class="hospitalActionItem">
                                        <i class='bx bx-pause-circle'></i>
                                        <p>Suspend Hospital</p>
                                    </div>

                                    <div class="hospitalActionItem">
                                        <i class='bx bx-show'></i>
                                        <p>View Details</p>
                                    </div>

                                    <div class="hospitalActionItem editHospital">
                                        <i class='bx bx-edit'></i>
                                        <p>Edit Hospital</p>
                                    </div>

                                    <div class="hospitalActionItem danger">
                                        <i class='bx bx-trash'></i>
                                        <p>Delete Hospital</p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Mercy Hospital</td>
                            <td>Owerri, Imo</td>
                            <td>12</td>
                            <td>25 Apr 2026</td>
                            <td>240</td>
                            <td><span class="hospitalStatus approved">Approved</span></td>

                            <td class="hospitalActionCell">
                                <div class="hospitalActionTrigger">
                                    <i class='bx bx-dots-vertical-rounded'></i>
                                </div>

                                <div class="hospitalActionMenu">
                                    <div class="hospitalActionItem messageUser">
                                        <i class='bx bx-message-rounded-dots'></i>
                                        <p>Message Hospital</p>
                                    </div>

                                    <div class="hospitalActionItem">
                                        <i class='bx bx-pause-circle'></i>
                                        <p>Suspend Hospital</p>
                                    </div>

                                    <div class="hospitalActionItem">
                                        <i class='bx bx-show'></i>
                                        <p>View Details</p>
                                    </div>

                                    <div class="hospitalActionItem editHospital">
                                        <i class='bx bx-edit'></i>
                                        <p>Edit Hospital</p>
                                    </div>

                                    <div class="hospitalActionItem danger">
                                        <i class='bx bx-trash'></i>
                                        <p>Delete Hospital</p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Mercy Hospital</td>
                            <td>Owerri, Imo</td>
                            <td>12</td>
                            <td>25 Apr 2026</td>
                            <td>240</td>
                            <td><span class="hospitalStatus approved">Approved</span></td>

                            <td class="hospitalActionCell">
                                <div class="hospitalActionTrigger">
                                    <i class='bx bx-dots-vertical-rounded'></i>
                                </div>

                                <div class="hospitalActionMenu">
                                    <div class="hospitalActionItem messageUser">
                                        <i class='bx bx-message-rounded-dots'></i>
                                        <p>Message Hospital</p>
                                    </div>

                                    <div class="hospitalActionItem">
                                        <i class='bx bx-pause-circle'></i>
                                        <p>Suspend Hospital</p>
                                    </div>

                                    <div class="hospitalActionItem">
                                        <i class='bx bx-show'></i>
                                        <p>View Details</p>
                                    </div>

                                    <div class="hospitalActionItem editHospital">
                                        <i class='bx bx-edit'></i>
                                        <p>Edit Hospital</p>
                                    </div>

                                    <div class="hospitalActionItem danger">
                                        <i class='bx bx-trash'></i>
                                        <p>Delete Hospital</p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>