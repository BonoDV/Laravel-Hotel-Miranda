<?php
namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allActivities = Activity::all();
        return view('activity.data', compact('allActivities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('activity.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'type'         => 'required|in:surf,windsurf,kayak,atv,hot air balloon',
            'user_id'      => 'required|exists:users,id',
            'date_time'    => 'required|date',
            'paid'         => 'required|boolean',
            'notes'        => 'required|string',
            'satisfaction' => 'nullable|integer|min:1|max:10',
        ]);

        try {
            Activity::create($validated);
            return redirect()->route('activities.index')->with('success', 'Actividad creada correctamente.');
        } catch (\Exception $e) {
            return back()->withInput()->withErrors(['error' => 'Error al guardar la actividad: ' . $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $user_id)
    {
        $activity = Activity::where('user_id', $user_id)->firstOrFail();
        return view('activity.activityData', [
            'activity' => $activity,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($user_id, $date_time)
    {
        $activity = Activity::where('user_id', $user_id)
            ->where('date_time', $date_time)
            ->firstOrFail();

        return view('activity.edit', compact('activity'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $user_id, $date_time)
    {
        $activity = Activity::where('user_id', $user_id)
            ->where('date_time', $date_time)
            ->firstOrFail();

        $validated = $request->validate([
            'type'         => 'required|in:surf,windsurf,kayak,atv,hot air balloon',
            'paid'         => 'required|boolean',
            'notes'        => 'required|string',
            'satisfaction' => 'nullable|integer|min:1|max:10',
        ]);

        $activity->update($validated);

        return redirect()->route('activities.index')->with('success', 'Actividad actualizada correctamente.');
    }

    public function delete($user_id, $date_time)
    {
        $activity = Activity::where('user_id', $user_id)
            ->where('date_time', $date_time)
            ->firstOrFail();

        return view('activity.destroy', compact('activity'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($user_id, $date_time)
    {
        $activity = Activity::where('user_id', $user_id)
            ->where('date_time', $date_time)
            ->firstOrFail();
        try {
            $activity->delete();
            return redirect()->route('activities.index')->with('success', 'Actividad eliminada correctamente.');
        } catch (\Exception $e) {
            return back()->withInput()->withErrors(['error' => 'Error al eliminar la actividad: ' . $e->getMessage()]);
        }
    }
}
