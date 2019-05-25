Public Class Form1
    Private Sub Button1_Click(sender As Object, e As EventArgs) Handles Button1.Click
        Dim kata1, kata2, kata3, ganti_kata, hasil
        kata1 = "a"
        kata2 = "o"
        kata3 = "Purw" + kata1 + "kart" + kata1
        hasil = "Purw" + kata2 + "kert" + kata2
        Label1.Text = kata1
        Label2.Text = kata2
        Label3.Text = kata3
        Label4.Text = hasil

    End Sub
End Class
